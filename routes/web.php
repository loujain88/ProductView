<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('Products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('Products.index');
    Route::post('/', 'store')->name('Products.store');
    Route::get('/create', 'create')->name('Products.create');
    });