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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('articles', 'ArticleController');
Route::resource('authors', 'AuthorController');
Route::resource('categories', 'CategoryController');
Route::resource('comments', 'CommentController');
Route::resource('tag', 'TagController');

Route::group(['middleware' => ['cors']], function () {

    Route::post('register', 'APIAuthController@register');

    Route::post('login', 'APIAuthController@login');

    Route::group(['middleware' => 'jwt-auth'], function () {

    	Route::post('get_user_details', 'APIAuthController@get_user_details');

    });

});
