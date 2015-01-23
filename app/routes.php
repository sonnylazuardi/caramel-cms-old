<?php

Route::group(array('prefix' => 'admin'), function() {

    Route::controller('posts', 'AdminPostController');

});


Route::group(array('prefix' => 'api'), function() {

    Route::controller('posts', 'PostController');

});


Route::get('/', function()
{
	return View::make('hello');
});
