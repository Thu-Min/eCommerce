<?php

use App\Http\Middleware\AdminCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('user#home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'auth'])->name('auth');
});

Auth::routes();



// admin
Route::middleware([AdminCheck::class])->prefix('admin')->namespace('Admin')->group(function (){

    Route::get('profile', [AdminController::class, 'profile'])->name('admin#profile');
    Route::get('updateProfilePage/{id}', [AdminController::class, 'updateProfilePage'])->name('admin#updateProfilePage');
    Route::post('updateProfile/{id}', [AdminController::class, 'updateProfile'])->name('admin#updateProfile');
    Route::get('changePasswordPage/{id}', [AdminController::class, 'changePasswordPage'])->name('admin#changePasswordPage');
    Route::post('changePassword/{id}', [AdminController::class, 'changePassword'])->name('admin#changePassword');

    Route::get('account/userAccount', [UserController::class, 'userAccount'])->name('admin#userAccount');
    Route::get('account/adminAccount', [UserController::class, 'adminAccount'])->name('admin#adminAccount');
    Route::get('account/detailUserAcc/{id}', [UserController::class, 'detailUserAcc'])->name('admin#detailUserAcc');
    Route::get('account/detailAdminAcc/{id}', [UserController::class, 'detailAdminAcc'])->name('admin#detailAdminAcc');

    Route::get('category', [CategoryController::class, 'categoryPage'])->name('admin#categoryPage');
    Route::post('addCategory', [CategoryController::class, 'addCategory'])->name('admin#addCategory');
    Route::post('deleteCategory/{id}', [CategoryController::class, 'deleteCategory'])->name('admin#deleteCategory');
    Route::get('editCategoryPage/{id}', [CategoryController::class, 'editCategoryPage'])->name('admin#editCategoryPage');
    Route::post('editCategory/{id}', [CategoryController::class, 'editCategory'])->name('admin#editCategory');

    Route::get('product', [ProductController::class, 'productPage'])->name('admin#productPage');
    Route::get('addProductPage', [ProductController::class, 'addProductPage'])->name('admin#addProductPage');
    Route::post('addProduct/{id}', [ProductController::class, 'addProduct'])->name('admin#addProduct');
    Route::post('deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('admin#deleteProduct');
    Route::get('editProductPage/{id}', [ProductController::class, 'editProductPage'])->name('admin#editProductPage');
    Route::post('editProduct/{id}', [ProductController::class, 'editProduct'])->name('admin#editProduct');
    Route::get('detailProduct/{id}', [ProductController::class, 'detailProduct'])->name('admin#detailProduct');
});

// user
Route::prefix('user')->namespace('User')->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('user#home');

    Route::get('shop', [HomeController::class, 'shop'])->name('user#shopPage');
    Route::get('detail/{id}', [HomeController::class, 'detail'])->name('user#detail');

    Route::get('addToCart/{id}', [CartController::class, 'addToCart'])->name('user#addToCart');
    Route::post('addToCartP/{id}', [CartController::class, 'addToCartP'])->name('user#addToCartP');
    Route::get('cart/{id}', [CartController::class, 'cart'])->name('user#cart');
});
