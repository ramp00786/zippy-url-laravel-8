<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






//Auth::routes();

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);


//---start---After login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/get-history', [App\Http\Controllers\HomeController::class, 'getHistory'])->name('get-history');
//---end --After login



Route::get('/', [App\Http\Controllers\ShortenUrlController::class, 'index'])->name('/');
Route::post('/convert-url', [App\Http\Controllers\ShortenUrlController::class, 'store'])->name('convert-url');
Route::get('u/{slug?}', [App\Http\Controllers\ShortenUrlController::class, 'redirect_url']);

Route::post('/save-enquiry', [App\Http\Controllers\ContactsController::class, 'store'])->name('save-enquiry');





