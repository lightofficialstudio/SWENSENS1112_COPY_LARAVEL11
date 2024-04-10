<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// Guest Controller
use App\Http\Controllers\Authenticate\LoginController;
use App\Http\Controllers\Authenticate\RegisterController;
// Auth Controller
use App\Http\Controllers\Management\ProductController;
use App\Http\Controllers\Management\CategoryController;
use App\Http\Controllers\Management\UserController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
// Guest Route
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('register', [RegisterController::class, 'index'])->name('register');
// Auth Route
Route::prefix('backend')->group(function () {
    Route::prefix('product')->group(function () {
        Route::get('index', [ProductController::class, 'index'])->name('backend.product.index');
        Route::get('create', [ProductController::class, 'create'])->name('backend.product.create');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('backend.product.edit');
        Route::post('store', [ProductController::class, 'store'])->name('backend.product.store');
        Route::post('destroy/{id}', [ProductController::class, 'destroy'])->name('backend.product.destroy');
    });
    Route::prefix('category')->group(function () {
        Route::get('index', [CategoryController::class, 'index'])->name('backend.category.index');
        Route::get('create', [CategoryController::class, 'create'])->name('backend.category.create');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('backend.category.edit');
        Route::post('store', [CategoryController::class, 'store'])->name('backend.category.store');
        Route::post('destroy/{id}', [CategoryController::class, 'destroy'])->name('backend.category.destroy');
    });
    Route::prefix('user')->group(function () {
        Route::get('index', [UserController::class, 'index'])->name('backend.user.index');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
