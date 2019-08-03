<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/articles/search', 'ArticlesController@search');
// Route::prefix('auth')->group(function () {

//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');

// });

/*
 * The prefix method adds a prefix to all routes inside this group.
 * So routes will be accessible by e.g. "/articles/10/done".
 */
// Route::prefix('articles')->middleware('auth:api')->group(function () {
//     /*
//      * The "name" method gives this route a unique name. If we use this name
//      * throughout our api we can change the url that belongs to it easily later on.
//      */
//     Route::get('/articles/show', 'ArticlesController@show')->name('articles.show');

//     Route::post('/articles/add', 'ArticlesController@add')->name('articles.add');

//     /*
//      * The {article} is a route parameter. In the Controller it is hooked to
//      * an object of the Article model with the same name. So if we call a URL
//      * that puts a valid article ID here it will automatically load this article
//      * from the database and pass it to our controller method.
//      */
//     Route::put('/{article}', 'ArticlesController@update')->name('articles.update');

//     Route::delete('/{article}', 'ArticlesController@delete')->name('articles.delete');

// });

