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

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'coach'],function(){
  Route::resource('schools', 'SchoolController');
  Route::resource('clinics','ClinicController');
  Route::resource('tryouts','TryoutController');
  Route::resource('scholarships','ScholarshipController');
  Route::post('/skills/spring', 'SkillController@springSkills');
  Route::resource('teams','TeamController');
  Route::resource('/team/skillset','TeamSkillController');
  Route::resource('programs','ProgramController');
});

Route::group(['prefix' => 'cheerleader'],function(){
  Route::resource('teams','TeamController');
  //Route::resource('skills/beginner', 'BeginnerSkillController');
  //Route::resource('skills/advanced', 'AdvancedSkillController');
  //Route::resource('skills/elite', 'EliteSkillController');
  Route::post('/skills/spring', 'SkillController@springSkills');

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
