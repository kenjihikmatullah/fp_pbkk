<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/contact', [HomeController::class, 'index'])->name('contact');

Route::prefix('products')->group(function () {
  Route::get('/', [ProductController::class, 'index'])->name('products');
  Route::get('/{id}', [ProductController::class, 'show'])->name('product.detail');
});



Route::prefix('auth')->group(function () {
  Route::get('login', [AuthController::class, 'loginGet'])->name('login.get');
  Route::post('login', [AuthController::class, 'loginPost'])->name('login.post');
  Route::get('register', [AuthController::class, 'registerGet'])->name('register.get');
  Route::post('register', [AuthController::class, 'registerPost'])->name('register.post');
});

Route::middleware('auth')->group(function () {
  Route::post('logout', [AuthController::class, 'logout'])->name('logout');

  Route::prefix('orders')->group(function () {
    Route::post('/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/store', [OrderController::class, 'store'])->name('order.store');
  });

  Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart');
    Route::post('/', [CartController::class, 'store'])->name('cart.store');
  });
});
