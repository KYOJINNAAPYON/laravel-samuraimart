<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

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

Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('products/{product}/favorite', [ProductController::class, 'favorite'])->name('products.favorite');

Route::resource('products', ProductController::class)->middleware(['auth', 'verified']);
Auth::routes(['verify' => true]);
// Route::resource('products', ProductController::class);
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
