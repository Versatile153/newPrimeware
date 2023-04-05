<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PayMentController;
use App\Http\Controllers\UsersController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EarningsController;









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

Route::get('/', function () {
return view('welcome1');
});

Auth::routes();
Route::post('/reg',[UsersController::class,'create']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//////////////dash
Route::get('/help',[DashboardController::class,'help']);
Route::get('/earn',[DashboardController::class,'earn']);
Route::get('/ref',[DashboardController::class,'ref']);
Route::get('/withdraw',[DashboardController::class,'withdraw']);
Route::get('/view_with',[DashboardController::class,'view']);
Route::get('/dash',[DashboardController::class,'dash']);
Route::get('/deposit',[DashboardController::class,'deposit']);
Route::get('/view_deposit',[DashboardController::class,'view_deposit']);
// Route::get('/set_up_payement',[DashboardController::class,'set_up']);
Route::get('/profile',[DashboardController::class,'profile']);
Route::get('/payment_account',[DashboardController::class,'payment_account']);
Route::get('/security',[DashboardController::class,'security']);
Route::get('/admin',[DashboardController::class,'admin'])->middleware(['auth','admin']);
Route::get('/all_deposits',[DashboardController::class,'all_deposits']);
Route::get('/all_users',[DashboardController::class,'all_users']);
Route::get('/trx_id',[DashboardController::class,'trx_id']);
Route::get('/message',[DashboardController::class,'message']);
Route::post('/mess',[DashboardController::class,'mess']);
Route::get('/admin_mess',[DashboardController::class,'admin_mess']);
Route::get('/reply/{id}',[DashboardController::class,'reply']);
Route::post('/reply',[DashboardController::class,'repl']);
Route::get('/my_mess',[DashboardController::class,'my_mess']);



////payment
// Route::post('/payment',[PayMentController::class,'store']);

//withdrawals
Route::get('/withdraw',[PayMentController::class,'withdraw']);
Route::get('/view',[PayMentController::class,'view']);


///deposits
Route::get('/deposit',[PayMentController::class,'deposit']);
Route::get('/new_deposit',[PayMentController::class,'new_deposit']);



Route::get('/ref_count',[PayMentController::class,'ref_count']);


//post routes
Route::post('/plan',[PayMentController::class,'plan']);
Route::post('/set_up',[PayMentController::class,'set_up']);
Route::post('/profile',[PayMentController::class,'profile']);
Route::post('/security',[PayMentController::class,'security']);
Route::get('/trxx',[PayMentController::class,'trxx']);
Route::get('/show/{id}',[PayMentController::class,'show']);
Route::post('/money_withdrawal',[PayMentController::class,'money_withdrawal']);

///pages routes
Route::get('/forex',[PagesController::class,'forex']);
Route::get('/crypto',[PagesController::class,'crypto']);
Route::get('/stock',[PagesController::class,'stock']);
Route::get('/stake',[PagesController::class,'stake']);
Route::get('/commo',[PagesController::class,'commo']);
Route::get('/spot',[PagesController::class,'spot']);
Route::get('/bot',[PagesController::class,'bot']);
Route::get('/margin',[PagesController::class,'margin']);
Route::get('/career',[PagesController::class,'career']);
Route::get('/story',[PagesController::class,'story']);
Route::get('/price',[PagesController::class,'price']);
Route::get('/forex_price',[PagesController::class,'forex_price']);
Route::get('/crypto_pricing',[PagesController::class,'crypto_pricing']);


Route::get('/precious',[PagesController::class,'precious']);
Route::get('/oil',[PagesController::class,'oil']);
Route::get('/real',[PagesController::class,'real']);



Route::get('/image', function () {
    return view('image');
    });
Route::post('/logo',[DashboardController::class,'avatar']);
Route::post('/proof',[PayMentController::class,'proof']);
Route::get('/all_deposits/{id}',[PayMentController::class,'approve']);
Route::get('/revoke/{id}',[PayMentController::class,'revoke']);


Route::get('/all_with',[PayMentController::class,'all_with']);

//withdrawal approval and revoke
Route::get('/withdraw/{id}',[PayMentController::class,'appr_with']);
Route::get('/revoke_with/{id}',[PayMentController::class,'revoke_with']);


//earnings

Route::get('show/add1/{id}',[PayMentController::class,'add1']);
Route::get('show/add2/{id}',[PayMentController::class,'add2']);
Route::get('show/add3/{id}',[PayMentController::class,'add3']);
Route::get('show/add4/{id}',[PayMentController::class,'add4']);
Route::get('show/add5/{id}',[PayMentController::class,'add5']);
Route::get('show/add6/{id}',[PayMentController::class,'add6']);
Route::get('show/add7/{id}',[PayMentController::class,'add7']);
Route::get('show/add8/{id}',[PayMentController::class,'add8']);
Route::get('show/add9/{id}',[PayMentController::class,'add9']);
Route::get('show/add10/{id}',[PayMentController::class,'add6']);
Route::get('show/add11/{id}',[PayMentController::class,'add7']);
Route::get('show/add12/{id}',[PayMentController::class,'add8']);


  
    









Route::get('/referal-register/{id}',[DashboardController::class,'loadregister']);






Route::get('/transfer',[PayMentController::class,'transfer']);


Route::get('/transs',[PayMentController::class,'transs']);
Route::post('/tran',[PayMentController::class,'tran']);




Route::get('/reinvest',[DashboardController::class,'reinvest']);

Route::post('/reinv',[DashboardController::class,'reinv']);
Route::get('/admin_new',[DashboardController::class,'admin_new']);
Route::get('/latest_with',[DashboardController::class,'latest_with']);


Route::get('/earnings',[EarningsController::class,'earnings']);

Route::get('/increase-earnings/{id}', [EarningsController::class, 'increaseEarnings'])->name('increase-earnings');
Route::post('/increase-earnings', [EarningsController::class, 'increaseEarnings'])->name('increase-earnings');
Route::get('/auto-increase-earnings', [EarningsController::class, 'autoIncreaseEarnings'])->name('auto-increase-earnings');




///earnings
Route::get('/show/{id}/{percentage}', 'DepositController@updateEarnings');






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
