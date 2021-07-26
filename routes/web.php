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

//index 
Route::get('/', function () {
    return view('\index\index');
});

//contact us
Route::get('/contactus-view', function () {
    return view('\contactUs\contactUs');
});

//login 
Route::get('/login-view', function () {
    return view('\login\login');
});

//register 
Route::get('/register-view', function () {
    return view('\register\register');
});

//restaurant 
Route::get('/restaurant-view', function () {
    return view('\restaurant\restaurantView');
});

//user 
Route::get('/user-view', function () {
    return view('\user\user');
});