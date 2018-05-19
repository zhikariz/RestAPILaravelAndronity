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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('item','ApiItemController@index');
Route::post('item','ApiItemController@store');
Route::put('item/{id}','ApiItemController@update');
Route::delete('item/{id}','ApiItemController@destroy');



Route::get('customer','ApiCustomerController@index');
Route::post('customer','ApiCustomerController@store');
Route::put('customer/{id}','ApiCustomerController@update');
Route::delete('customer/{id}','ApiCustomerController@destroy');
Route::get('customer/login/{username}/{password}','ApiCustomerController@searchByGet');
Route::post('customer/login','ApiCustomerController@searchByPost');
