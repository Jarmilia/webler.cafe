<?php

Route::view('/','index');
Auth::routes();

Route::resource('articles', 'ArticlesController');
Route::get('/dashboard', 'DashboardController@index');
/*
Route::prefix('profil')->group(function(){
    Route::get('/Admin','WelcomeCOntroller@Admin');
   Route::get('/{name?}','WelcomeCOntroller@profile')->name('profilepage'); // ? -> bedeutet der name es ist optional });

   // dynamic route:
   Route::get('/users/{id}', function($id){
       return 'This is user '.$id;
   });
   //another dynamic route:
   Route::get('/users/{id}/{name}', function($id, $name){
       return 'This is user '.$name . ' with an id of ' .$id;
   });
*/
