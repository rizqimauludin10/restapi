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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/laundry', 'NyuciController@index');
Route::get('/laundry/{id}', 'NyuciController@show');

Route::get('/user/{id}', 'UserController@show');
Route::get('/users', 'UserController@users');
Route::post('/auth/register', 'AuthController@register');
Route::post('/auth/login', 'AuthController@login');
Route::get('/users/profile', 'UserController@profile') -> middleware('auth:api');
/*Route::get('/user', 'UserController@index');*/
