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
/*Get realted information of article: author, tag, category, comment */
Route::get('articles/{slug}/author', 'ArticleController@getAuthor')->name('articles.author');
Route::get('articles/popular', 'ArticleController@popular')->name('articles.popular');
Route::get('articles/{slug}/tags', 'ArticleController@getTags')->name('articles.tag');
Route::get('articles/{slug}/category', 'ArticleController@getCategory')->name('articles.category');
Route::get('articles/{slug}/comments', 'ArticleController@getComments')->name('articles.comment');
Route::get('articles/{slug}/realted-articles', 'ArticleController@getRelatedArticles')->name('articles.related-article');
/*Get articles by category*/
Route::get('categories/{slug}/articles', 'CategoryController@getArticles')->name('category.article');
/*Get artilces by tags*/
Route::get('tags/{slug}/articles', 'TagController@getArticles')->name('tag.article');
/*Get artilces by author*/
Route::get('authors/{slug}/articles', 'AuthorController@getArticles')->name('author.article');
//Seach
Route::get('search/index', ['as' => 'search.index', 'uses' => 'SearchController@index']);
//Rest API
Route::resource('articles', 'ArticleController');
Route::resource('authors', 'AuthorController');
Route::resource('categories', 'CategoryController');
Route::resource('comments', 'CommentController');
Route::resource('tags', 'TagController');
//API Authentication :JWT
Route::group(['middleware' => ['cors']], function () {
    Route::post('register', 'APIAuthController@register');
    Route::post('login', 'APIAuthController@login');
    Route::group(['middleware' => 'jwt-auth'], function () {
        Route::post('get_user_details', 'APIAuthController@get_user_details');
    });
});
