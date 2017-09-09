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
Route::group(['prefix' => 'api'],funtion(){
  Route::post('/register', 'ApiController@register');

  Route::post('/login', 'ApiController@login');
})->middleware('cors');
Auth::routes();
Route::resource('favorite','FavoriteController');
Route::get('/home', 'HomeController@index');
Route::resource('user','UserController');
Route::group(['prefix' => 'coach'],function(){
  Route::get('cheerleaders','UserController@index');
  Route::resource('schools', 'SchoolController');
  Route::resource('clinics','ClinicController');
  Route::resource('tryouts','TryoutController');
  Route::resource('scholarships','ScholarshipController');
  Route::post('/skills/spring', 'SkillController@springSkills');
  Route::post('/skills/hard', 'SkillController@hardSkills');
  Route::post('/skills/group', 'SkillController@groupSkills');
  Route::post('/skills/coed', 'SkillController@coedSkills');
  Route::resource('teams','TeamController');
  Route::resource('/team/skillset','TeamSkillController');
  Route::resource('programs','ProgramController');
});

Route::group(['prefix' => 'cheerleader'],function(){
  Route::post('update-profile','CheerleaderController@updateProfile');
  Route::resource('teams','TeamController');
  //Route::resource('skills/beginner', 'BeginnerSkillController');
  //Route::resource('skills/advanced', 'AdvancedSkillController');
  //Route::resource('skills/elite', 'EliteSkillController');
  Route::post('/skills/spring', 'SkillController@springSkills');
  Route::post('/skills/hard', 'SkillController@hardSkills');
  Route::post('/skills/group', 'SkillController@groupSkills');
  Route::post('/skills/coed', 'SkillController@coedSkills');

  Route::resource('schools', 'SchoolController');
  Route::group(['prefix' => 'search'], function(){
    Route::get('schools','SchoolController@search');
    Route::get('clinics','ClinicController@search');
  });

  Route::resource('clinics','ClinicController');
  Route::resource('tryouts','TryoutController');
  Route::resource('scholarships','ScholarshipController');
  Route::resource('privates','PrivateController');

});
Route::post('api/save-subscription','NotificationController@webPush');
Route::get('test-webpush','NotificationController@sendTest');
Route::get('/send-message/{id}','MessageController@getSendMessageView');
Route::resource('/message','MessageController');

Route::group(['prefix' => 'oauth'],function(){
  Route::get('redirect','StripeController@handleRedirect');
});

Route::get('/user', function (Illuminate\Http\Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'instructor'],function(){
  Route::get('/{id}','PrivateController@show');
  Route::post('update-prices','UserController@updatePrices');
});
Route::resource('cheerleader','CheerleaderController');
