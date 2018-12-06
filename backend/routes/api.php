<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('user', [
   'uses' => 'UsersController@store'
]);
Route::get('users', [
   'uses' => 'UsersController@index'
]);
Route::put('user/{id}', [
    'uses' => 'UsersController@update'
]);
Route::delete('user/{id}', [
    'uses' => 'UsersController@destroy'
]);
Route::post('category', [
    'uses' => 'CategoriesController@store'
]);
Route::get('categories', [
    'uses' => 'CategoriesController@index'
]);
Route::put('category/{id}', [
    'uses' => 'CategoriesController@update'
]);
Route::delete('category/{id}', [
    'uses' => 'CategoriesController@destroy'
]);
Route::post('product', [
    'uses' => 'ProductController@store'
]);
Route::get('products', [
    'uses' => 'ProductController@index'
]);
Route::put('product/{id}', [
    'uses' => 'ProductController@update'
]);
Route::delete('product/{id}', [
    'uses' => 'ProductController@destroy'
]);