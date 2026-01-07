<?php

use App\Http\Controllers\Admin\ClearCacheController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Models\Settings;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use App\Http\Controllers\AutoTaskController;
use App\Http\Controllers\AutoRoiController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LanguageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__ . '/admin/web.php';
require __DIR__ . '/admin/notification.php';
require __DIR__ . '/user/web.php';
require __DIR__ . '/user/plan-routes.php';
require __DIR__ . '/botman.php';

// Language Routes
Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('change.language');
Route::get('/language/{locale}', [LanguageController::class, 'switchLanguage'])->name('language.switch');
Route::get('/current-language', [LanguageController::class, 'getCurrentLanguage'])->name('current.language');




//cron url
Route::get('/cron', [AutoTaskController::class, 'autotopup'])->name('cron');

Route::get('/run-crypto-update', function () {
    if (request('key') !== env('CRON_KEY')) {
        abort(403, 'Unauthorized');
    }

    \Artisan::call('update:crypto');
    return 'Crypto prices updated.';
});



Route::get('/copytrade', function () {
    if (request('key') !== env('CRON_KEY')) {
        abort(403, 'Unauthorized');
    }

    \Artisan::call('copytrade:generate-profits');
    return 'Crypto trade updated.';
});


Route::get('/run-market-update', function () {
    if (request('key') !== env('CRON_KEY')) {
        abort(403, 'Unauthorized');
    }

    Artisan::call('update:market');
    return 'Market instruments updated.';
});

Route::get('/fetchMarket', function () {
    // Optional: protect with a secret token
    if (request('key') !== env('CRON_KEY')) {
        abort(403, 'Unauthorized');
    }

    \Artisan::call('schedule:run');
    return 'Schedule run executed.';
});
// Bulk bot trading - generate 20 trades for each bot
// Route::get('/cron/bulk-bot-trades/{trades?}', [AutoTaskController::class, 'generateBulkBotTrades'])->name('cron.bulk.bot.trades');

//new plan system cron url
Route::get('/cron/roi', [AutoRoiController::class, 'processAutomaticRoi'])->name('cron.roi');
//Front Pages Route
//Front Pages Route
Route::get('/', [HomePageController::class, 'index'])->name('home');

// Account Blocked Page
Route::get('/account-blocked', function () {
    $settings = \App\Models\Settings::first();
    return view('auth.account-blocked', compact('settings'));
})->name('account.blocked');

Route::get('useragreement', [HomePageController::class, 'useragreement'] )->name('useragreement');
Route::get('documentation',[HomePageController::class, 'documentation'])->name('documentation');
Route::get('about', [HomePageController::class, 'about'])->name('about');
Route::get('contacts',[HomePageController::class, 'contact'])->name('contact');
Route::get('contact',[HomePageController::class, 'contact'])->name('contact');
Route::get('policy', [HomePageController::class, 'policy'])->name('policy');
Route::get('whyus', [HomePageController::class, 'whyus'])->name('whyus');
Route::get('regulation', [HomePageController::class, 'regulation'])->name('regulation');
Route::get('features', [HomePageController::class, 'features'])->name('features');
Route::get('documentation', [HomePageController::class, 'documentation'])->name('documentation');

Route::get('for-traders', [HomePageController::class, 'fortrader'])->name('fortrader');
Route::get('trading-conditions', [HomePageController::class, 'useragreement'])->name('trading_conditions');
Route::get('values', [HomePageController::class, 'values'])->name('values');
Route::get('indices', [HomePageController::class, 'indices'])->name('indices');
Route::get('shares', [HomePageController::class, 'shares'])->name('shares');
Route::get('nfts', [HomePageController::class, 'nfts'])->name('nfts');
Route::get('trade', [HomePageController::class, 'trade'])->name('trade');

Route::get('events', [HomePageController::class, 'events'])->name('events');
Route::get('education', [HomePageController::class, 'education'])->name('education');
Route::get('tradings', function(){
    return view('home.about');
});

Route::get('trading', function(){
    return view('home.about');
});

Route::get('terms', function(){
    return view('home.terms');
});

Route::get('index', function(){
    return view('home.index');
});

