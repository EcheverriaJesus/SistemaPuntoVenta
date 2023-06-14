<?php

use App\Models\Group;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\Sale_detailController;
use App\Http\Controllers\SaleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource('product', App\Http\Controllers\ProductController::class)->middleware('auth:sanctum');

Route::resource('sale', App\Http\Controllers\SaleController::class)->middleware('auth:sanctum');

Route::resource('order', App\Http\Controllers\OrderController::class)->middleware('auth:sanctum');

Route::resource('sale_detail', App\Http\Controllers\Sale_detailController::class)->middleware('auth:sanctum');

Route::resource('debt', App\Http\Controllers\DebtController::class)->middleware('auth:sanctum');