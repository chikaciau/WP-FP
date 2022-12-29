<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/product/category/{category}', [HomeController::class, 'category'])->name('product_category');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/detail/{id}', [ProductController::class, 'show'])->name('product_detail');
Route::get('/product/add', [ProductController::class, 'create'])->name('product_add');
Route::post('/product/store', [ProductController::class, 'store'])->name('product_store');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product_edit');
Route::post('/product/update', [ProductController::class, 'update'])->name('product_update');
Route::get('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product_destroy');
