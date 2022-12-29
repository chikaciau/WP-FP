<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/add', [ProductController::class, 'index'])->name('product_add');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product_detail');
Route::get('/product/category/{category}', [ProductController::class, 'category'])->name('product_category');
