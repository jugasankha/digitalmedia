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
// home route
Route::get('/', 'PagesController@index');
// services route
Route::get('/services', 'PagesController@services');
// about route
Route::get('/about', 'PagesController@about');
// team route
Route::get('/team', 'PagesController@team');
// contact route
Route::get('/contact', 'PagesController@contact');

// Services routes
Route::get('/services/{service}', 'PagesController@service');