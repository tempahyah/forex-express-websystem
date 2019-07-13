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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/team', 'PagesController@team');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/convert', 'ConvertCurrencyController@convertCurrency');
Route::resource('bureaus', 'BureausController');
Route::resource('rates', 'RatesController');
Route::resource('currencies', 'CurrenciesController');
Route::get('/bureaus/{bureau_id}/rates', 'BureausController@rates');
Route::resource('modes', 'ModesController');
Route::resource('users', 'UsersController');
Route::resource('roles', 'RolesController');
