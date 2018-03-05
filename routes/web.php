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

Route::group(['middleware' => ['web']], function(){

	// Here we do a default login accepted by laravel since in the default folder callled AUTH/LOGINCONTROLLER
	//The first 3 are the authentication routes

	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

	Route::post('login', 'Auth\LoginController@login');

	Route::get('logout', 'Auth\LoginController@logout')->name('logout');

	//Registration Routes Here we comment the registration Page BLS the people viewing it dont have to sign

//	Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

//	Route::post('register', 'Auth\RegisterController@register');

	// Password Reset

	  Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    //Controller leading to the front end view
    Route::get('/', 'BlogController@index');
    //The Controller Takes You to a single Entrepreneural View Sow that you can read much about them
    Route::get('entre/{id}', ['as' => 'ENP.single-entrepreneur', 'uses' => 'BlogController@getSingleEntrepreneur'])->where('id', '[\w\d\-\_]+');
    Route::get('bussi/{id}', ['as' => 'ENP.single-business', 'uses' => 'BlogController@getSingleBusiness'])->where('id', '[\w\d\-\_]+');
    Route::get('tech/{id}', ['as' => 'ENP.single-technology', 'uses' => 'BlogController@getSingleTechnology'])->where('id', '[\w\d\-\_]+');
    Route::get('healthtips/{id}', ['as' => 'ENP.single-health', 'uses' => 'BlogController@getSingleHealth'])->where('id', '[\w\d\-\_]+');
    Route::get('celebrities/{id}', ['as' => 'ENP.single-celebrity', 'uses' => 'BlogController@getSingleCelebrity'])->where('id', '[\w\d\-\_]+');
    Route::get('jobb/{id}', ['as' => 'ENP.single-job', 'uses' => 'BlogController@getSingleJob'])->where('id', '[\w\d\-\_]+');
    Route::get('/contact', 'BlogController@contact');
    Route::post('contact', 'BlogController@postContact');
    Route::get('/entrepreneurialsection', 'BlogController@entrepreneur');
    Route::get('/businesssection', 'BlogController@business');
    Route::get('/technologysection', 'BlogController@technology');
    Route::get('/jobsection', 'BlogController@job');
    Route::get('/celebritiessection', 'BlogController@celebrities');
    Route::get('/healthsection', 'BlogController@health');
    Route::get('/teams', 'BlogController@team');
    Route::get('teamm/{id}', ['as' => 'ENP.single-team', 'uses' => 'BlogController@getSingleTeam'])->where('id', '[\w\d\-\_]+');
    //The controller above controls the main pages for the BME technology especially the SolarController

    /** The below controller works for the backend **/ 
    //Route::resource('project', 'ProjectController');
  Route::get('/dashboard', 'BlogController@dashboard');
  Route::resource('entrepreneur', 'EntrepreneurController');
  Route::resource('business', 'BusinessController');
  Route::resource('technology', 'TechnologyController');
  Route::resource('new', 'NewsController');
  Route::resource('team', 'TeamController');
  Route::resource('social', 'SocialController');
  Route::resource('religion', 'ReligionController');
  Route::resource('category', 'CategoryController');
  Route::resource('health', 'HealthController');
  Route::resource('artist', 'ArtistController');
  Route::resource('job', 'JobController');

	/** It Ends Here **/

  //Here we are manualling add our commets the comment bellow handles entrepreneur

    Route::post('comments/{entrepreneur_id}',  ['as' => 'comments.store', 'uses' => 'CommentController@store']);

    Route::get('comments/{id}/edit',  ['as' => 'comments.edit', 'uses' => 'CommentController@edit']);

    Route::put('comments/{id}',  ['as' => 'comments.update', 'uses' => 'CommentController@update']);

    Route::get('comments/{id}',  ['as' => 'comments.show', 'uses' => 'CommentController@show']);

    Route::delete('comments/{id}',  ['as' => 'comments.destroy', 'uses' => 'CommentController@destroy']);

    Route::get('comments/{id}/delete', ['uses' => 'CommentController@delete', 'as' => 'comments.delete']); 

    // Here we are manualling add our commets the comment bellow handles Business Comments

    Route::post('bussinesscomments/{business_id}',  ['as' => 'businesscomments.store', 'uses' => 'BusinessCommentController@store']);

    Route::get('bussinesscomments/{id}/edit',  ['as' => 'businesscomments.edit', 'uses' => 'BusinessCommentController@edit']);

    Route::put('bussinesscomments/{id}',  ['as' => 'businesscomments.update', 'uses' => 'BusinessCommentController@update']);

    Route::delete('bussinesscomments/{id}',  ['as' => 'businesscomments.destroy', 'uses' => 'BusinessCommentController@destroy']);

    Route::get('bussinesscomments/{id}/delete', ['uses' => 'BusinessCommentController@delete', 'as' => 'businesscomments.delete']);

    // Here we are manualling add our commets the comment bellow handles Technology Comments

    Route::post('technologycomments/{technology_id}',  ['as' => 'technologycomments.store', 'uses' => 'TechnologyCommentController@store']);

    Route::get('technologycomments/{id}/edit',  ['as' => 'technologycomments.edit', 'uses' => 'TechnologyCommentController@edit']);

    Route::put('technologycomments/{id}',  ['as' => 'technologycomments.update', 'uses' => 'TechnologyCommentController@update']);

    Route::delete('technologycomments/{id}',  ['as' => 'technologycomments.destroy', 'uses' => 'TechnologyCommentController@destroy']);

    Route::get('technologycomments/{id}/delete', ['uses' => 'TechnologyCommentController@delete', 'as' => 'technologycomments.delete']); 

 // This Part Now is for the Health Comment Sections
     Route::post('healthcomments/{health_id}',  ['as' => 'healthcomments.store', 'uses' => 'HealthCommentController@store']);

    Route::get('healthcomments/{id}/edit',  ['as' => 'healthcomments.edit', 'uses' => 'HealthCommentController@edit']);

    Route::put('healthcomments/{id}',  ['as' => 'healthcomments.update', 'uses' => 'HealthCommentController@update']);

    Route::delete('healthcomments/{id}',  ['as' => 'healthcomments.destroy', 'uses' => 'HealthCommentController@destroy']);

    Route::get('healthcomments/{id}/delete', ['uses' => 'HealthCommentController@delete', 'as' => 'healthcomments.delete']); 

    // This Part Now is for the Celebrities Comment Sections
     Route::post('artistcomments/{artist_id}',  ['as' => 'artistcomments.store', 'uses' => 'ArtistCommentController@store']);

    Route::get('artistcomments/{id}/edit',  ['as' => 'artistcomments.edit', 'uses' => 'ArtistCommentController@edit']);

    Route::put('artistcomments/{id}',  ['as' => 'artistcomments.update', 'uses' => 'ArtistCommentController@update']);

    Route::delete('artistcomments/{id}',  ['as' => 'artistcomments.destroy', 'uses' => 'ArtistCommentController@destroy']);

    Route::get('artistcomments/{id}/delete', ['uses' => 'ArtistCommentController@delete', 'as' => 'artistcomments.delete']); 
  });

// This is a demo portion
Route::resource('apply', 'AvoCareersController');

// Demo Here
Route::get('/file', 'fileController@index');
Route::get('/file/store', 'fileController@store');

Route::get('upload', 'UploadController@index');
Route::post('store', 'UploadController@store');
Route::get('show', 'UploadController@show');