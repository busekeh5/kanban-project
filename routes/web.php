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
    return 'Halo zazero!';
});
Route::get('/halo', function () {
    return '<h1>Bye, Zazero!</h1>';
    });
    Route::get('/bull', function () {
        return '<h1>hi, dimar!</h1>';
        });