<?php
Route::get('/users/([0-9]+)',function($userId)
{
	echo "This is From Route $userId";
});

Route::get('/akash/([a-z]+)/([0-9]+)',function($lastname,$age)
{
	echo "I am Akash $lastname My age is $age";
});
Route::get('/userprofile/([a-z_]+)','Modules\User\Controllers\UserController@profile');

Route::get('/dipu/([a-z]+)',function($title)
{
		echo "Dipanjan $title";
});

Route::get('/sam',function()
{
	p($_REQUEST);
	echo "Sam Via GET";
});
Route::post('/sam',function()
{
	p($_REQUEST);
	echo "Sam Via POST";
});
Route::put('/sam',function()
{
	parse_str(file_get_contents("php://input"),$post_vars);
	p($post_vars);
	echo "Sam Via PUT";
});
Route::delete('/sam',function()
{
	p($_REQUEST);
	echo "Sam Via DELETE";
});
Route::patch('/sam',function()
{
	p($_REQUEST);
	echo "Sam Via PATCH";
});