<?php

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
/*
|-----------------------------------------
| Control de landing page
|-----------------------------------------
*/
Route::get('/',[App\Http\Controllers\LandingController::class, 'index'])->name('home_landing');

Route::get('/shop',[App\Http\Controllers\LandingController::class, 'shop'])->name('home_landing.shop');

Route::get('/companies',[App\Http\Controllers\LandingController::class, 'companies'])->name('home_landing.companies');
