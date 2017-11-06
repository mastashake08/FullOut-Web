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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

  Route::middleware('auth:api')->group(function(){
    Route::get('/school/search', 'SchoolController@search');
    Route::resource('/school','SchoolController');
    Route::get('/search','UserController@search');
    Route::get('/search/instructor', 'PrivateController@search');
    Route::resource('/instructor','PrivateController');

    Route::resource('/message','MessageController');
    Route::resource('/skill','SkillController');
  });
    Route::post('/register', 'ApiController@register');

    Route::post('/login', 'ApiController@login');
    Route::get('/test','ApiController@test');

    Route::resource('/video','VideoController');
Route::post('/billing',function(Request $request){
  $user = \App\User::find($request->user_id);
  if($user->type == 'student'){
    $user->newSubscription('cheer', 'cheerleader-plan')->create($request->token);
  }
  else{
    $user->newSubscription('instructor', 'Instructor-Plan')->create($request->token);
  }
  return;
});
