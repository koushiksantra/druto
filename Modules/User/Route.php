<?php
Route::get('/users/([0-9]+)',function($userId)
{
	echo "This is From Route $userId";
});

Route::get('/akash/([a-z]+)/([0-9]+)',function($lastname,$age)
{
	echo "I am Akash $lastname My age is $age";
});