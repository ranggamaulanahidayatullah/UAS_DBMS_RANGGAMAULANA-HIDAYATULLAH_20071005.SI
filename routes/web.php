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

Route::get('bagianrmh', 'App\Http\Controllers\bagianrmhController@index');
Route::get('barangrmh', 'App\Http\Controllers\barangrmhController@index');
Route::get('pengeluaranrmh', 'App\Http\Controllers\pengeluaranrmhController@index');
Route::get('pengeluaranitemrmh', 'App\Http\Controllers\bpengeluaranitemrmhController@index');
Route::get('petugasrmh', 'App\Http\Controllers\petugasrmhController@index');
