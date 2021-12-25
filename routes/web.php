<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StreetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WardController;
use App\Models\Ward;

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

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/register', [RegistrationController::class, 'index']);
Route::get('/settings', [SettingController::class, 'index']);
Route::get('/loans', [LoanController::class, 'index']);
Route::get('/accounts', [AccountController::class, 'index']);

Route::get('/fetch_wards', [WardController::class, 'fetch_wards']);
Route::get('/fetch_streets/{id}', [StreetController::class, 'fetch_streets']);
Route::get('/fetch_category', [CategoryController::class, 'fetch_category']);
Route::get('/fetch_activity', [ActivityController::class, 'fetch_activity']);


// Controller resources


Route::resource('wards', WardController::class);
Route::resource('streets', StreetController::class);
Route::resource('activity', ActivityController::class);
Route::resource('category', CategoryController::class);
Route::resource('groups', GroupController::class);
Route::resource('attachments', AttachmentController::class);
Route::resource('reports', ReportController::class);
Route::resource('users', UserController::class);
