<?php

Route::view('/','index');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/articles/search', 'ArticlesController@search');
Route::get('/api/articles.json', 'ArticlesController@articlesJson');
Route::resource('articles', 'ArticlesController');
