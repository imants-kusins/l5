<?php

Route::get('/', 'PageController@index');

Route::get('home', 'UserController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



// Route::group(array('middleware' => 'auth'), function()
// {

// });
