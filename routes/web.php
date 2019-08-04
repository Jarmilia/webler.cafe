<?php

Route::view('/','index');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/articles/search', 'ArticlesController@search');
Route::resource('articles', 'ArticlesController');
