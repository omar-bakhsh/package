<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
// pages
Route::view('/service_policy', 'service_policy')->name('service_policy');;
Route::view('/team', 'team')->name('team');;
Route::view('/drop_shoping', 'drop_shoping')->name('drop_shoping');;
Route::view('/programming', 'programming')->name('programming');;
//development
Route::view('/development', 'development')->name('development');;
// design 
Route::view('/design', 'design')->name('design');;
//Route::view('/', '')->name('');;
Route::view('/coupon', 'coupon')->name('coupon');;
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('mobile', 'home-mobile');
