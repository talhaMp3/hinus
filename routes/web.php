<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\QuickViewController;
use App\Http\Controllers\ShopDetailController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;





Route::get('/', [HomeController::class, 'index'])->name('user.index');
Route::get('shop', [ShopController::class, 'index'])->name('user.shop');
Route::get('shop/{slug}', [ShopDetailController::class, 'index'])->name('user.shopDetail');

Route::get('/quick-view', [QuickViewController::class, 'QuickView'])->name('quick.view');

Route::prefix('wishlist')->group(function () {
    Route::get('/', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/add', [WishlistController::class, 'add'])->name('wishlist.add');
    Route::post('/remove', [WishlistController::class, 'remove'])->name('wishlist.remove');
});
Route::get('/otp', [WishlistController::class, 'otpApi'])->name('wishlist.otp');

Route::get('about', function () {
    return view('frontend.about');
})->name('user.about');

Route::get('contact', function () {
    return view('frontend.contact');
})->name('user.contact');

Route::get('static', function () {
    return view('frontend.static');
})->name('user.static');
