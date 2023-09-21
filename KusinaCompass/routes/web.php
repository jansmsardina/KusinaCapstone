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

Route::get('/W', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/StoreLogin', [App\Http\Controllers\HomeController::class, 'StoreLogin'])->name('StoreLogin');

Route::get('/homes', [App\Http\Controllers\HomeController::class, 'index'])->name('homes');
Route::get('/Home', [App\Http\Controllers\LandingPageController::class, 'Home'])->name('Home');
Route::get('/About', [App\Http\Controllers\LandingPageController::class, 'About'])->name('About');
Route::get('/ContactUs', [App\Http\Controllers\LandingPageController::class, 'ContactUs'])->name('ContactUs');
Route::get('/Stores', [App\Http\Controllers\LandingPageController::class, 'Stores'])->name('Stores');