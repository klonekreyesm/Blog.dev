<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/portfolio', function()
{
	return "This is my Portfolio";
});

// Route::get('/rolldice/{guess}', function($guess){

// 	$randVar = rand(1,6);
// 	return View::make('roll-dice')->with('randVar', $randVar)->with('guess', $guess);
// });

Route::get('/about', 'ResumeController@showResume');

Route::get('/portfolio', 'PortfolioController@showPortfolio');


Route::resource('/posts', 'PostsController');


