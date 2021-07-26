<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('login', 'AuthController@getIndex')->before('guest');
Route::get('logout', 'AuthController@getLogout')->before('auth');
Route::post('login', 'AuthController@postLogin')->before('guest');

Route::get('/', 'ArtikelController@getIndex');
Route::get('create', 'ArtikelController@getCreate');
Route::post('create', 'ArtikelController@postCreate');
Route::get('view/{idArtikel}', 'ArtikelController@getView');
Route::get('update/{idArtikel}', 'ArtikelController@getUpdate');
Route::post('update/{idArtikel}', 'ArtikelController@postUpdate');
Route::get('delete/{idArtikel}', 'ArtikelController@getDelete');