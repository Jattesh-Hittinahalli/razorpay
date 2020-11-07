<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorpayController;

Route::get('/', [RazorpayController::class,'payusingRazorpay'])->name('payusingrazorpay');
Route::post('payment', [RazorpayController::class,'payment'])->name('payment');

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


