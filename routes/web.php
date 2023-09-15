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
Route::get('/delete_group/{id}', [BulkSMSController::class, 'deleteGroup'])->name('delete_group');
Route::post('/saveContacts', [BulkSMSController::class, 'saveContacts'])->name('saveContacts');
Route::post('/submitSMSForm', [BulkSMSController::class, 'submitSMSForm'])->name('submitSMSForm');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
