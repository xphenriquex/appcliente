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
    return view('home');
});


Route::resource('teste', 'TesteController');
Auth::routes();



Route::get('cliente', ['uses' => 'ClienteController@index', 'as' => 'cliente.index']);
Route::get('cliente/adicionar', ['uses' => 'ClienteController@adicionar', 'as' => 'cliente.adicionar']);

Route::get('home', ['uses' => 'HomeController@index', 'as' => 'home']);