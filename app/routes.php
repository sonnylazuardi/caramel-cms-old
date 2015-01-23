<?php

Route::group(array('prefix' => 'admin'), function() {

    Route::controller('posts', 'AdminPostController');

});


Route::group(array('prefix' => 'api'), function() {

    Route::controller('posts', 'PostController');

});


Route::get('/', function()
{
	return File::get(public_path() . '/angular.html');
});
