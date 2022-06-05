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


Route::get('/', 'BlogController@home');
Route::get('/product', 'BlogController@product');

Route::get('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::post('/loginPost', 'LoginController@loginPost');
Route::get('/dashboard', 'DashboardController@dashboard');
Route::get('/dashboard-product', 'DashboardController@product');
Route::post('/productPost', 'DashboardController@productAdd');
Route::get('/product-edit/{id}', 'DashboardController@editProductShow');
Route::post('/productEdit', 'DashboardController@editProduct');
Route::get('/product-delete/{id}', 'DashboardController@deleteProduct');
Route::get('/dashboard-product-add', 'DashboardController@addProduct');
Route::get('/dashboard-setting', 'DashboardController@settingProduct');
Route::post('/settingEdit', 'DashboardController@editSetting');
