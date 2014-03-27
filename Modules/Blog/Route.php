<?php
Route::all('/posts/([0-9]+)/test','Modules\Blog\Controllers\BlogController');
Route::get('/mintu','Modules\Blog\Controllers\BlogController@mintu');
Route::get('/profile/([a-z]+)','Modules\Blog\Controllers\BlogController@displayUserProfile');
Route::get('/([a-z]+)/([a-z]+)/([a-z]+)','Modules\Blog\Controllers\BlogController@testCity');
Route::get('/products/([0-9]+)','Modules\Blog\Controllers\BlogController@productDetails');