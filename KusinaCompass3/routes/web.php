<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
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

    Route::get('/stores/edit', [ProfileController::class, 'edit'])->name('stores.edit');
    Route::patch('/stores', [ProfileController::class, 'update'])->name('stores.update');
    Route::delete('/stores', [ProfileController::class, 'destroy'])->name('stores.destroy');
    
    Route::post('/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::get('/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::put('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::delete('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

    


});




require __DIR__.'/auth.php';
