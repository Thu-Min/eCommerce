<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RouteController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('product/list', [RouteController::class, 'productList']);

Route::get('category/list', [RouteController::class, 'categoryList']);
Route::post('category/detail', [RouteController::class, 'categoryDetail']);
Route::post('category/update', [RouteController::class, 'categoryUpdate']);
Route::post('category/create', [RouteController::class, 'createCategory']);
Route::post('category/delete', [RouteController::class, 'deleteCategory']);

Route::post('contact/create', [RouteController::class, 'createContact']);

