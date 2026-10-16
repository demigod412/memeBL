<div class="row">
    <div class="col-md-8 offset-md-2">
        <form action="javascript:void(0)" method="POST" id="nowpaymentsform">
            @csrf
            @method('PUT')
            <h4 class="text-primary">NOWPayments (Crypto):</h4>
            <small class="">Get your API key and IPN secret from <a href="https://account.nowpayments.io/"
                    target="_blank">https://account.nowpayments.io/</a> (Settings &rarr; Payments &rarr; API keys / Instant
                payment notifications). Users will be able to deposit with 100+ cryptocurrencies and their balance is
                credited automatically once the payment is finished.</small>
            <div class="mt-3 form-group">
                <h5 class="">Status</h5>
                <select name="np_status" class="form-control">
                    <option value="enabled" {{ optional($nowpayments)->status == 'enabled' ? 'selected' : '' }}>Active</option>
                    <option value="disabled" {{ optional($nowpayments)->status != 'enabled' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <h5 class="">API Key</h5>
                <input type="text" name="np_api_key" class="form-control" value="{{ $moresettings->np_api_key }}">
            </div>
            <div class="form-group">
                <h5 class="">IPN Secret Key</h5>
                <input type="text" name="np_ipn_secret" class="form-control"
                    value="{{ $moresettings->np_ipn_secret }}">
            </div>
            <div class="form-group">
                <h5 class="">Mode</h5>
                <select name="np_sandbox" class="form-control">
                    <option value="no" {{ $moresettings->np_sandbox != 'yes' ? 'selected' : '' }}>Live</option>
                    <option value="yes" {{ $moresettings->np_sandbox == 'yes' ? 'selected' : '' }}>Sandbox (testing)</option>
                </select>
            </div>
            <div class="form-group">
                <h5 class="">IPN Callback URL</h5>
                <input type="text" class="form-control" value="{{ route('nowpayments.ipn') }}" readonly>
                <small class="text-{{ $text }}">Sent automatically with every invoice; no need to set it in your
                    NOWPayments dashboard.</small>
            </div>
            <div class="form-group">
                <small class="text-{{ $text }}">Minimum/maximum deposit, logo and description can be changed from the
                    <strong>NOWPayments</strong> entry under Payment Methods. Keep its name as "NOWPayments".</small>
            </div>
            <div class="form-group">
                <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">
            </div>
        </form>
    </div>
</div>
