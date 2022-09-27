<?php

use App\Http\Middleware\AdminCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('customer.home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::check()){
            if(Auth::user()->role == 'admin') {
                return redirect()->route('admin#profile');
            } else if (Auth::user()->role == ''){
                return view('customer.home');
            }
        }
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
    Route::post('addProduct', [ProductController::class, 'addProduct'])->name('admin#addProduct');
    Route::post('deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('admin#deleteProduct');
});
