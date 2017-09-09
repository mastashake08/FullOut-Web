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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::post('/register', 'ApiController@register');

    Route::post('/login', 'ApiController@login');
    Route::get('/test','ApiController@test');
    Route::get('/school/search', 'SchoolController@search');
    Route::resource('/school','SchoolController');
    Route::get('/search','UserController@search');
    Route::get('/search/instructor', 'PrivateController@search');
    Route::resource('/instructor','PrivateController');
