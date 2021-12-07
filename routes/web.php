<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/login', [PagesController::class, 'login']);
Route::get('/dashboard', [PagesController::class, 'dashboard']);


Route::get('logout', [PagesController::class, 'logout'])->name('logout');



// Controller resources

Route::resource('register', RegistrationController::class);
Route::resource('loan', LoanController::class);
Route::resource('account', AccountController::class);
Route::resource('report', ReportController::class);
Route::resource('setting', SettingController::class);

