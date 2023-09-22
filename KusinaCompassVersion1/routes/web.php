<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('Home');
});

Route::get('/Home', [App\Http\Controllers\LandingPageController::class, 'Home'])->name('Home');
Route::get('/About', [App\Http\Controllers\LandingPageController::class, 'About'])->name('About');
Route::get('/ContactUs', [App\Http\Controllers\LandingPageController::class, 'ContactUs'])->name('ContactUs');
Route::get('/Stores', [App\Http\Controllers\LandingPageController::class, 'Stores'])->name('Stores');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/store', [ProfileController::class, 'edit'])->name('store.edit');
    Route::patch('/store', [ProfileController::class, 'update'])->name('store.update');
    Route::delete('/store', [ProfileController::class, 'destroy'])->name('store.destroy');
});  
Route::get('/menu', function () {
    return view('layouts.admin.menu');
})->middleware(['auth', 'verified'])->name('menu');

require __DIR__.'/auth.php';
