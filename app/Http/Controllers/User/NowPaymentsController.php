<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\DepositStatus;
use App\Models\Deposit;
use App\Models\NpTransaction;
use App\Models\Settings;
use App\Models\SettingsCont;
use App\Models\Tp_Transaction;
use App\Models\User;
use App\Models\Wdmethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class NowPaymentsController extends Controller
{
    const METHOD_NAME = 'NOWPayments';

    private function apiUrl(SettingsCont $settings2): string
    {
        return $settings2->np_sandbox == 'yes'
            ? 'https://api-sandbox.nowpayments.io/v1'
            : 'https://api.nowpayments.io/v1';
    }

    //Create a NOWPayments invoice and send the user to the hosted checkout
    public function createInvoice(Request $request)
    {
        $method = Wdmethod::where('name', self::METHOD_NAME)->first();
        $settings = Settings::where('id', '1')->first();
        $settings2 = SettingsCont::find(1);

        if (!$method || $method->status != 'enabled' || empty($settings2->np_api_key)) {
            return redirect()->route('deposits')->with('message', 'Crypto payment via NOWPayments is currently unavailable.');
        }

        $amount = round((float) $request->session()->get('amount'), 2);
        if ($amount <= 0) {
            return redirect()->route('deposits')->with('message', 'Please enter a valid deposit amount.');
        }
        if ($method->minimum > 0 && $amount < $method->minimum) {
            return redirect()->route('deposits')->with('message', "Minimum deposit via NOWPayments is {$settings->currency}{$method->minimum}.");
        }
        if ($method->maximum > 0 && $amount > $method->maximum) {
            return redirect()->route('deposits')->with('message', "Maximum deposit via NOWPayments is {$settings->currency}{$method->maximum}.");
        }

        $currency = strtolower($settings->s_currency ?: 'usd');
        $orderId = 'NP' . Auth::user()->id . '-' . strtoupper(Str::random(12));

        try {
            $response = Http::withHeaders(['x-api-key' => $settings2->np_api_key])
                ->timeout(30)
                ->post($this->apiUrl($settings2) . '/invoice', [
                    'price_amount' => $amount,
                    'price_currency' => $currency,
                    'order_id' => $orderId,
                    'order_description' => 'Account deposit by ' . Auth::user()->email,
                    'ipn_callback_url' => route('nowpayments.ipn'),
                    'success_url' => route('nowpayments.return'),
                    'cancel_url' => route('deposits'),
                ]);
        } catch (\Exception $e) {
            Log::error('NOWPayments invoice request failed: ' . $e->getMessage());
            return redirect()->route('deposits')->with('message', 'Could not reach the payment gateway. Please try again.');
        }

        if (!$response->successful() || empty($response['invoice_url'])) {
            Log::error('NOWPayments invoice error: ' . $response->body());
            return redirect()->route('deposits')->with('message', 'The payment gateway rejected the request. Please try again or contact support.');
        }

        NpTransaction::create([
            'user_id' => Auth::user()->id,
            'order_id' => $orderId,
            'invoice_id' => (string) $response['id'],
            'amount' => $amount,
            'currency' => $currency,
            'status' => 'waiting',
        ]);

        // delete the session variables
        $request->session()->forget('payment_mode');
        $request->session()->forget('amount');
        $request->session()->forget('asset');

        return redirect()->away($response['invoice_url']);
    }

    //User lands here after paying on the NOWPayments page; crediting happens in the IPN
    public function paymentReturn()
    {
        return redirect()->route('deposits')->with('success', 'Payment received. Your account will be credited automatically once the transaction is confirmed on the blockchain.');
    }

    //Instant Payment Notification sent by NOWPayments on every status change
    public function ipn(Request $request)
    {
        $settings2 = SettingsCont::find(1);
        $payload = json_decode($request->getContent(), true);

        if (!is_array($payload) || empty($settings2->np_ipn_secret)) {
            return response()->json(['error' => 'invalid request'], 400);
        }

        if (!$this->validSignature($payload, (string) $request->header('x-nowpayments-sig'), $settings2->np_ipn_secret)) {
            Log::warning('NOWPayments IPN with invalid signature', ['order_id' => $payload['order_id'] ?? null]);
            return response()->json(['error' => 'invalid signature'], 401);
        }

        $status = $payload['payment_status'] ?? '';
        $creditedDeposit = null;

        DB::transaction(function () use ($payload, $status, &$creditedDeposit) {
            $txn = NpTransaction::where('order_id', $payload['order_id'] ?? '')->lockForUpdate()->first();

            // Already credited or unknown order: nothing to do
            if (!$txn || $txn->status == 'finished') {
                return;
            }

            $txn->payment_id = $payload['payment_id'] ?? $txn->payment_id;
            $txn->pay_currency = $payload['pay_currency'] ?? $txn->pay_currency;
            $txn->actually_paid = $payload['actually_paid'] ?? $txn->actually_paid;
            $txn->status = $status;

            if ($status == 'finished') {
                $sameCurrency = strtolower($payload['price_currency'] ?? '') == strtolower($txn->currency);
                $sameAmount = abs((float) ($payload['price_amount'] ?? 0) - (float) $txn->amount) < 0.01;

                if (!$sameCurrency || !$sameAmount) {
                    Log::warning('NOWPayments IPN amount mismatch for order ' . $txn->order_id, $payload);
                    $txn->status = 'mismatch';
                } else {
                    $creditedDeposit = $this->creditDeposit($txn);
                    $txn->deposit_id = $creditedDeposit->id;
                }
            }

            $txn->save();
        });

        if ($creditedDeposit) {
            $this->sendDepositEmails($creditedDeposit);
        }

        return response()->json(['status' => 'ok']);
    }

    //NOWPayments signs the JSON body (keys sorted recursively) with HMAC-SHA512
    private function validSignature(array $payload, string $signature, string $secret): bool
    {
        if ($signature === '') {
            return false;
        }

        $this->sortKeys($payload);
        $expected = hash_hmac('sha512', json_encode($payload, JSON_UNESCAPED_SLASHES), trim($secret));

        return hash_equals($expected, $signature);
    }

    private function sortKeys(array &$array)
    {
        ksort($array);
        foreach ($array as &$value) {
            if (is_array($value)) {
                $this->sortKeys($value);
            }
        }
        unset($value);
    }

    //Save the deposit and credit balance, bonus and referral commissions
    private function creditDeposit(NpTransaction $txn): Deposit
    {
        $user = User::where('id', $txn->user_id)->lockForUpdate()->first();
        $settings = Settings::where('id', '=', '1')->first();
        $amount = (float) $txn->amount;
        $earnings = $settings->referral_commission * $amount / 100;

        $dp = new Deposit();
        $dp->amount = $amount;
        $dp->txn_id = $txn->payment_id ?: $txn->order_id;
        $dp->payment_mode = self::METHOD_NAME . ($txn->pay_currency ? ' (' . strtoupper($txn->pay_currency) . ')' : '');
        $dp->status = 'Processed';
        $dp->proof = 'Automatic Payment';
        $dp->plan = 0;
        $dp->user = $user->id;
        $dp->save();

        if ($settings->deposit_bonus != NULL and $settings->deposit_bonus > 0) {
            $bonus = $amount * $settings->deposit_bonus / 100;
            //create history
            Tp_Transaction::create([
                'user' => $user->id,
                'plan' => "Deposit Bonus for $settings->currency $amount deposited",
                'amount' => $bonus,
                'type' => "Bonus",
            ]);
        } else {
            $bonus = 0;
        }

        //add funds to user's account
        User::where('id', $user->id)
            ->update([
                'account_bal' => $user->account_bal + $amount + $bonus,
                'bonus' => $user->bonus + $bonus,
                'cstatus' => 'Customer',
            ]);

        if (!empty($user->ref_by)) {
            $agent = User::where('id', $user->ref_by)->lockForUpdate()->first();
            User::where('id', $user->ref_by)
                ->update([
                    'account_bal' => $agent->account_bal + $earnings,
                    'ref_bonus' => $agent->ref_bonus + $earnings,
                ]);

            //credit commission to ancestors
            app(DepositController::class)->getAncestors(User::all(), $amount, $user->id);

            Tp_Transaction::create([
                'user' => $user->ref_by,
                'plan' => "Credit",
                'amount' => $earnings,
                'type' => "Ref_bonus",
            ]);
        }

        return $dp;
    }

    private function sendDepositEmails(Deposit $dp)
    {
        $user = User::where('id', $dp->user)->first();
        $settings = Settings::where('id', '=', '1')->first();

        try {
            Mail::to($settings->contact_email)->send(new DepositStatus($dp, $user, 'Successful Deposit', true));
        } catch (\Exception $e) {
            Log::error('Failed to send NOWPayments deposit email to admin. Deposit ID: ' . $dp->id . '. Error: ' . $e->getMessage());
        }

        try {
            Mail::to($user->email)->send(new DepositStatus($dp, $user, 'Successful Deposit', false));
        } catch (\Exception $e) {
            Log::error('Failed to send NOWPayments deposit email to user. Deposit ID: ' . $dp->id . ', User: ' . $user->email . '. Error: ' . $e->getMessage());
        }
    }
}
