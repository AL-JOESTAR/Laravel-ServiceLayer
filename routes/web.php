<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/store', [BarangController::class, 'store'])->name('store');
Route::get('/data', [BarangController::class, 'index']);