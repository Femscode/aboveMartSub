<?php

use App\Http\Controllers\BulkSMSController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/home', [BulkSMSController::class, 'index'])->name('home');
Route::get('/contact_group', [BulkSMSController::class, 'contactGroup'])->name('contact_group');
Route::get('/view_group/{id}', [BulkSMSController::class, 'viewGroup'])->name('view_group');
Route::get('/transactions', [BulkSMSController::class, 'transactions'])->name('transactions');
Route::get('/view_details/{id}', [BulkSMSController::class, 'viewDetails'])->name('view_details');
Route::get('/delete_group/{id}', [BulkSMSController::class, 'deleteGroup'])->name('delete_group');
Route::post('/saveContacts', [BulkSMSController::class, 'saveContacts'])->name('saveContacts');
Route::post('/submitSMSForm', [BulkSMSController::class, 'submitSMSForm'])->name('submitSMSForm');
Route::post('/sendSMS2', [BulkSMSController::class, 'sendSMS2'])->name('sendSMS2');
Route::any('/resend_sms/{id}', [BulkSMSController::class, 'resendSMS'])->name('resend_sms');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
