<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('Products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('Products.index');
    Route::post('/', 'store')->name('Products.store');
    Route::get('/create', 'create')->name('Products.create');
    });