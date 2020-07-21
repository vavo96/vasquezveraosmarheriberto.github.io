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
    return view('poliza');
});

Route::post('/guardarPoliza','PolizaController@guardarPoliza');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/excel', 'PolizaController@index')->name('excel');
Route::get('import-export', 'PolizaController@importExport');
Route::post('import', 'PolizaController@import');
