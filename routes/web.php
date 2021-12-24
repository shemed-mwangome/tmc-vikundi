<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StreetController;
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

Route::get('/', [PagesController::class, 'index']);

Route::get('/login', [PagesController::class, 'login']);
Route::get('/dashboard', [PagesController::class, 'dashboard']);


Route::get('logout', [PagesController::class, 'logout'])->name('logout');

// Registrations
Route::get('/registration/dashboard', [PagesController::class, 'reg_dashboard']);
Route::get('/registration/all', [PagesController::class, 'reg_all']);
Route::get('/registration/view', [PagesController::class, 'reg_view']);
Route::get('/registration/search', [PagesController::class, 'reg_search']);
Route::get('/registration/uploads', [PagesController::class, 'reg_uploads']);
Route::get('/registration/certificate', [PagesController::class, 'reg_certificate']);
Route::get('/registration/report', [PagesController::class, 'reg_report']);
Route::get('/registration/member', [PagesController::class, 'reg_member']);
Route::get('/registration/attach', [PagesController::class, 'reg_attach']);


Route::get('/registration', [RegistrationController::class, 'index']);
Route::get('/setting', [SettingController::class, 'index']);

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
