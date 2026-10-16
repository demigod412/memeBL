@extends('layouts.dasht')
@section('title', $title)
@section('content')

<div class="px-4 py-8 mx-auto max-w-xl sm:px-6 lg:px-8">
    <div class="space-y-4 mb-6">
        <x-danger-alert />
        <x-success-alert />
    </div>

    <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-100 dark:border-gray-800 p-6">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-500/20 mb-4">
                <i data-lucide="bitcoin" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
            </div>
            <h1 class="text-2xl font-medium text-gray-900 dark:text-white">Pay with Crypto</h1>
            <p class="mt-2 text-gray-600 dark:text-gray-400">
                Powered by NOWPayments &mdash; choose from 100+ cryptocurrencies on the next page.
            </p>
        </div>

        <div class="mt-6 p-4 bg-gray-50 dark:bg-gray-800 rounded-lg text-center">
            <p class="text-sm text-gray-500 dark:text-gray-400">Amount to deposit</p>
            <p class="text-3xl font-semibold text-gray-900 dark:text-white break-all">
                {{ Auth::user()->currency }}{{ $amount }}
            </p>
        </div>

        <ul class="mt-6 space-y-2 text-sm text-gray-600 dark:text-gray-400">
            <li class="flex items-start gap-2">
                <i data-lucide="check-circle" class="w-4 h-4 mt-0.5 text-green-500 flex-shrink-0"></i>
                You will be redirected to a secure NOWPayments checkout page.
            </li>
            <li class="flex items-start gap-2">
                <i data-lucide="check-circle" class="w-4 h-4 mt-0.5 text-green-500 flex-shrink-0"></i>
                Send the exact amount shown there, on the network shown there.
            </li>
            <li class="flex items-start gap-2">
                <i data-lucide="check-circle" class="w-4 h-4 mt-0.5 text-green-500 flex-shrink-0"></i>
                Your balance is credited automatically once the payment is confirmed. No proof upload needed.
            </li>
        </ul>

        <form method="POST" action="{{ route('nowpayments.pay') }}" class="mt-6"
            onsubmit="this.querySelector('button').disabled = true;">
            @csrf
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 disabled:opacity-60 text-white font-medium py-3 px-4 rounded-lg transition-colors">
                Continue to Payment
            </button>
        </form>
        <a href="{{ route('deposits') }}"
            class="block mt-3 text-center text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
            Cancel
        </a>
    </div>
</div>
@endsection
