<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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






Route::get('/', [CartController::class, 'index'])->name('home');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{product}', [CartController::class, 'addtocart'])->name('add-cart');
Route::get('/remove/{id}', [CartController::class, 'remove'])->name('remove');






