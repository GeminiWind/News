<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.index');
});

Route::get('/index', function() {
  return view('frontend.pages.index');
})->name('index');

Route::get('/about', function() {
  return view('frontend.pages.about');
})->name('about');

Route::get('/tech', function() {
  return view('frontend.pages.tech');
})->name('tech');

Route::get('/book', function() {
  return view('frontend.pages.book');
})->name('books');

Route::get('/sports', function() {
  return view('frontend.pages.sports');
})->name('sports');

Route::get('/business', function() {
  return view('frontend.pages.business');
})->name('business');

Route::get('/single', function() {
  return view('frontend.pages.single');
})->name('single');

Route::get('/singlepage', function() {
  return view('frontend.pages.singlepage');
})->name('singlepage');
Route:: get('search/index' , ['as'=>'search.index','uses'=>'SearchController@index']);
Route:: get('result-for/{type}/{name}', ['as' => 'search', 'uses' => 'SearchController@showResult']);
Route::post('/register', 'ReaderController@register')->name('reader.register');
Route::post('/login', 'ReaderController@login')->name('reader.login');
Route::get('/logout','ReaderController@logout')->name('reader.logout');
Route::get('/articles/{slugArticle}','ArticleController@show')->name('article.show');
Route::get('/categories/{slugCategory}','CategoryController@show')->name('category.show');
Route::get('/authors/{slugAuthor}','AuthorController@show')->name('author.show');
Route::get('/tags/{slugTag}','TagController@show')->name('tag.show');
Route::post('/comment-on/{slugArticle}', 'CommentController@store')->name('comment.store');

