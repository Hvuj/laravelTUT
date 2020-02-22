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
Route::get('/', 'PagesController@home');
Route::get('/email', 'PagesController@email');
Route::get('/home', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/UserPage', 'PagesController@UserPage');
Route::get('/laravel/users', 'PagesController@users');

Route::get('/services', 'ServiceController@index');
Route::get('/services/create', 'ServiceController@create');
Route::post('/services', 'ServiceController@store');
// Route::view('/about', 'about');

Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customers', 'CustomerController@store');
Route::get('/customers/{customer}', 'CustomerController@show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit');
Route::put('/customers/{customer}', 'CustomerController@update');
Route::delete('/customers/{customer}', 'CustomerController@destroy');

Route::get('/witchers', 'WitcherController@index');
Route::get('/witchers/create', 'WitcherController@create');
Route::post('/witchers', 'WitcherController@store');
Route::get('/witchers/{witcher}', 'WitcherController@show');
Route::get('/witchers/{witcher}/edit', 'WitcherController@edit');
Route::put('/witchers/{witcher}', 'WitcherController@update');
Route::delete('/witchers/{witcher}', 'WitcherController@destroy');

Route::get('/games', 'GameController@index');
Route::get('/games/create', 'GameController@create');
Route::post('/games', 'GameController@store');
Route::get('/games/{game}', 'GameController@show');
Route::get('/games/{game}', 'GameController@edit');
Route::put('/games/{game}', 'GameController@update');
Route::delete('/games/{game}', 'GameController@destroy');


Route::resources([
    '/sukis' => 'SukiController',
    '/phones' => 'PhoneController'
    ]);

Route::get('/laravel', 'LaravelController@index');
Route::get('/laravel/create', 'LaravelController@create');
Route::post('/laravel', 'LaravelController@store');
Route::get('/laravel/users/{laravel}', 'LaravelController@show');
Route::get('/laravel/{laravel}/edit', 'LaravelController@edit');
Route::put('/laravel/{laravel}', 'LaravelController@update');
Route::delete('/laravel/{laravel}', 'LaravelController@destroy');