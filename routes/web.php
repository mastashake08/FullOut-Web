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
Route::get('/video','VideoController@index');
Auth::routes();
Route::resource('favorite','FavoriteController');
Route::get('favorite-teams','FavoriteController@getFavoriteTeams');
Route::get('/home', 'HomeController@index')->middleware('subscribed');
Route::resource('user','UserController');
Route::group(['prefix' => 'coach'],function(){
  Auth::routes();
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
  Route::resource('sos','SosController');
});

Route::group(['prefix' => 'cheerleader','middleware' => 'subscribed'],function(){
  Route::post('add-video','CheerleaderController@addVideo');
  Route::post('update-video','CheerleaderController@updateVideo');
  Route::post('delete-video','CheerleaderController@deleteVideo');
  Route::post('add-award','CheerleaderController@addAward');
  Route::post('update-award','CheerleaderController@updateAward');
  Route::post('delete-award','CheerleaderController@deleteAward');
  Auth::routes();
  Route::post('update-profile','CheerleaderController@updateProfile');
  Route::resource('teams','TeamController');
  Route::get('search-teams','TeamController@getTeams');
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
Route::group(['prefix' => 'instructor','middleware' => 'subscribed'],function(){
  Auth::routes();
  Route::get('/{id}','PrivateController@show');
  Route::post('update-prices','UserController@updatePrices');
});
Route::resource('cheerleader','CheerleaderController');


//billing
Route::get('billing',function(){
  if(auth()->user()->type="student")
  return view('student.billing');
  else {
    return view('instructor.billing');
  }
});
