<?php

use App\Http\Controllers\CableController;
use App\Http\Controllers\CharmController;
use App\Http\Controllers\CryptopayController;
use App\Http\Controllers\PalmpayController;
use App\Http\Controllers\TeleController;
use App\Http\Controllers\TelegramController;
use App\Http\Controllers\WovenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AirtimeController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\VirtualAccount\VirtualController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('check-vendor', [TransactionController::class, 'check_vendor']);

//Route::any('telegram-webhook', [TelegramController::class, 'webhook']);
Route::any('telegram-webhook', [TeleController::class, 'handleWebhook']);
Route::any('telegram-test', [TelegramController::class, 'verify_telegram_test']);

Route::post('fund-merchant', [TransactionController::class, 'fund_merchant']);


Route::post('notify', [TransactionController::class, 'notify_webhook']);
Route::post('e-payment', [TransactionController::class, 'e_payment']);
Route::any('payment', [TransactionController::class, 'payment']);

Route::get('cable-plan',[CableController::class, 'get_cable_plan']);

Route::post('get-account/wvn',[WovenController::class, 'get_account']);
Route::post('woven/callback',[WovenController::class, 'woven_webhook']);
Route::post('repush-woven',[WovenController::class, 'repush_woven']);
Route::any('charm/callback',[CharmController::class, 'charm_webhook']);
Route::any('paypoint/callback',[PalmpayController::class, 'paypoint_webhook']);
Route::any('cryptopayment',[CryptopayController::class, 'cryptopayment']);

Route::get('get-usdt-wallet',[TransactionController::class, 'getusdtWallet']);
Route::get('get-usd-rate',[TransactionController::class, 'get_usd_rate']);





Route::post('card-transaction', [TransactionController::class, 'card_transaction']);

Route::post('opay-transfer-transaction', [TransactionController::class, 'opay_transfer_transaction']);
Route::post('palmpay-transfer-transaction', [TransactionController::class, 'palmpay_transfer_transaction']);
Route::post('kuda-transfer-transaction', [TransactionController::class, 'kuda_transfer_transaction']);

Route::post('ninepsb-transfer-transaction', [TransactionController::class, 'ninepsb_transaction']);
Route::post('charm-transfer-transaction', [CharmController::class, 'charm_transaction']);
Route::post('woven-transfer-transaction', [WovenController::class, 'woven_transaction']);







Route::post('send-money', [TransactionController::class, 'send_money']);





Route::group(['middleware' => ['auth:api', 'acess']], function () {


    Route::post('buy-airtime',[AirtimeController::class, 'buy_airtime']);
    Route::post('buy-ng-airtime',[AirtimeController::class, 'buy_ng_airtime']);
    Route::post('buy-data',[DataController::class, 'buy_data']);
    Route::get('validate-cable',[CableController::class, 'validate_cable']);
    Route::post('buy-cable', [CableController::class, 'buy_cable']);





});


Route::post('auth',[AuthController::class, 'get_token']);


Route::post('get-account',[TransactionController::class, 'get_account_details']);
Route::get('get-banks',[TransactionController::class, 'get_banks']);


Route::get('get-service',[AirtimeController::class, 'get_service']);
Route::get('get-country',[AirtimeController::class, 'get_country']);
Route::get('get-service-cost',[AirtimeController::class, 'get_service_cost']);


Route::get('get-data',[DataController::class, 'get_data']);



Route::get('resolve-bank',[TransactionController::class, 'resolve_bank']);
Route::post('verify',[TransactionController::class, 'verify_woo']);
Route::any('verify-transaction',[TransactionController::class, 'verify_others']);



Route::post('pay',[TransactionController::class, 'initialize_payment']);
Route::post('resolve',[TransactionController::class, 'resolve_deposit']);
Route::post('resolve-others',[TransactionController::class, 'resolve_others']);




Route::post('resolve-complete',[TransactionController::class, 'resolve_complete']);




Route::post('get-account',[TransactionController::class, 'get_account']);











