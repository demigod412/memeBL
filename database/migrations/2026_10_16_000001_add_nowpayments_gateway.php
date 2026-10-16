<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddNowpaymentsGateway extends Migration
{
    public function up()
    {
        // NOWPayments credentials live next to the other gateway keys (Flutterwave, Binance)
        Schema::table('settings_conts', function (Blueprint $table) {
            if (!Schema::hasColumn('settings_conts', 'np_api_key')) {
                $table->string('np_api_key')->nullable();
            }
            if (!Schema::hasColumn('settings_conts', 'np_ipn_secret')) {
                $table->string('np_ipn_secret')->nullable();
            }
            if (!Schema::hasColumn('settings_conts', 'np_sandbox')) {
                $table->string('np_sandbox', 10)->default('no');
            }
        });

        // Tracks every NOWPayments invoice; a Deposit is only created once the payment is finished
        if (!Schema::hasTable('np_transactions')) {
            Schema::create('np_transactions', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->string('order_id')->unique();
                $table->string('invoice_id')->nullable()->index();
                $table->string('payment_id')->nullable();
                $table->decimal('amount', 20, 2);
                $table->string('currency', 20);
                $table->string('pay_currency', 50)->nullable();
                $table->string('actually_paid')->nullable();
                $table->string('status', 30)->default('waiting');
                $table->unsignedBigInteger('deposit_id')->nullable();
                $table->timestamps();
            });
        }

        // The deposit method users pick; admin enables/disables it like any other method
        if (!DB::table('wdmethods')->where('name', 'NOWPayments')->exists()) {
            DB::table('wdmethods')->insert([
                'name' => 'NOWPayments',
                'minimum' => '10',
                'maximum' => '1000000',
                'charges_amount' => '0',
                'charges_type' => 'percentage',
                'duration' => 'Automatic - credited after blockchain confirmation',
                'img_url' => null,
                'methodtype' => 'crypto',
                'type' => 'deposit',
                'status' => 'disabled',
                'defaultpay' => 'yes',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down()
    {
        DB::table('wdmethods')->where('name', 'NOWPayments')->delete();
        Schema::dropIfExists('np_transactions');
        Schema::table('settings_conts', function (Blueprint $table) {
            $table->dropColumn(['np_api_key', 'np_ipn_secret', 'np_sandbox']);
        });
    }
}
