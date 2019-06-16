<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
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

Route::get('/', 'PagesController@index');

// Route::get('/about', function(){
//     return view('pages.about');
// });
Route::get('/about', 'PagesController@about');
// Route::get('/services', function(){
//     return view('pages.services');
// });
Route::get('/services', 'PagesController@services');

Route::resource('articles', 'ArticlesController');
// Route::resource('comments', 'CommentsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');



// Route::get('/dashboard', 'DashboardController@index');
