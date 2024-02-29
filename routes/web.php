<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\NewController;
use \App\Http\Controllers\CartDetailController;
use \App\Http\Controllers\ProductDetailController;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/news', [NewController::class, 'listNews'])->name('news');

Route::controller(CartDetailController::class)->group(function() {
    Route::get('/cart', 'cartDetail')->name('cart');
    Route::post('/addToCart', 'addToCart')->name('addToCart');
    Route::get('/addToCart', 'cartDetail')->name('addToCart');
    Route::delete('/removeFromCart/{id}', 'removeFromCart')->name('removeFromCart');
    Route::delete('/removeAllCart', 'removeAllCart')->name('removeAllCart');
});

Route::controller(ProductDetailController::class)->group(function() {
    Route::get('/productDetail/{id}', 'productDetail')->name('productDetail');
});

Route::controller(ProductController::class)->group(function() {
    Route::get('/products', 'listProducts')->name('products');
    Route::get('/products/{id}', 'productByCategory')->name('productByCategory');
    Route::get('/listNewProducts', 'listNewProducts')->name('listNewProducts');
    Route::get('/listTopProducts', 'listTopProducts')->name('listTopProducts');
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(RegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
});

Route::get('/404-error', function () {
    return view('component.404_page');
})->name('404-error');

