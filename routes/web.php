<?php

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

Auth::routes();

Route::resource('/clientes', 'ClienteController');

Route::resource('/maquinas', 'MaquinaController');

Route::get('/maquinas/{id}', 'MaquinaController@obtener')->name('maquinas.obtener');

Route::get('/home', 'HomeController@index')->name('home');
