<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category') -> group(function(){
    Route::get('/food-beverage',[CategoryController::class, 'food_beverage']);
    Route::get('/beauty-health',[CategoryController::class, 'beauty_health']);
    Route::get('/home-care',[CategoryController::class, 'home_care']);
    Route::get('/baby-kid',[CategoryController::class, 'baby_kid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);

Route::get('/transaksi', [SaleController::class, 'index']);