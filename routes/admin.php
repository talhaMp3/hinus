<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\admin\HeroController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;


Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Route::middleware('auth:admin')->group(function () {
    //     Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // });
});


// Begin::Category
Route::middleware(['auth:admin'])->group(
    function () {
Route::prefix('admin')->group(function () {

    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');
    
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('{id}/update', [CategoryController::class, 'update'])->name('category.update');
        Route::get('{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
    });

    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('create', [ProductController::class, 'create'])->name('product.create');
        Route::post('store', [ProductController::class, 'store'])->name('product.store');
        Route::get('{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('{id}/update', [ProductController::class, 'update'])->name('product.update');
        Route::get('{id}/delete', [ProductController::class, 'destroy'])->name('product.destroy');
        Route::post('/product/{id}/delete-image', [ProductController::class, 'deleteImage'])->name('product.delete-image');
    });

    Route::prefix('hero')->group(function () {
        Route::get('/', [HeroController::class, 'index'])->name('hero.index');
        Route::get('create', [HeroController::class, 'create'])->name('hero.create');
        Route::post('store', [HeroController::class, 'store'])->name('hero.store');
        Route::get('{id}/edit', [HeroController::class, 'edit'])->name('hero.edit');
        Route::post('{id}/update', [HeroController::class, 'update'])->name('hero.update');
        Route::get('{id}/delete', [HeroController::class, 'destroy'])->name('hero.destroy');
    });
});
});
