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
    return view('welcome');
});

Route::get('/flights', function(){
    return view('/flights/flights');
});

Route::get('/hotel', function(){
    return view('/Hotel/hotel');
});

Route::get('/holiday', function(){
    return view('/holiday/holiday');
});

Route::get('/forex', function(){
    return view('/forex/forex');
});

Route::get('/visa', function(){
    return view('/visa/visa');
});

Route::get('/insurance', function(){
    return view('/insurance/insurance');
});

Route::get('/travel-diaries', function(){
    return view('/traveldiaries/travel');
});

Route::get('/about-us', function(){
    return view('/about/about');
});