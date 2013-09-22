<?php

//Allow CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers :X-Requested-With, content-type');
//'Access-Control-Allow-Headers'=>'X-Requested-With, content-type',);
//header('Access-Control-Allow-Origin: *');
//Header set Access-Control-Allow-Origin "*"

// Route group for API versioning
Route::group(array('prefix' => 'api/v1'), function(){
    Route::resource('url', 'UrlController');
	Route::resource('getLeaderboard', 'GetLeaderboard');
	Route::resource('getStats', 'GetStats');
	Route::resource('sendStat', 'SendStat');
});

Route::controller('users', 'UserController');

Route::resource('photo', 'PhotoController');

Route::get('foo', function(){
	return View::make('second');
});

// Route::get('/', function()
// {
// 	return View::make('error');
// });

Route::get('leaderboard', function(){
	return View::make('leaderboard');
});
/*
Route::any('home', function() {
	return View::make('home.index');
});

Route::any('contact-us', function(){
    return View::make('home.contact-us');
});
*/
//Route::controller(Controller::detect());
//Route::get('about', 'home@about');
