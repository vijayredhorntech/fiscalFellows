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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contactUs', function () {
    return view('contactUs');
})->name('contactUs');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/mutualFunds', function () {
    return view('mutualFunds');
})->name('mutualFunds');

Route::get('/digitalSignature', function () {
    return view('digitalSignature');
})->name('digitalSignature');

Route::get('/businessSetup', function () {
    return view('businessSetup');
})->name('businessSetup');

Route::get('/dsa', function () {
    return view('dsa');
})->name('dsa');


