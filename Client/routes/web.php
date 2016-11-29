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

Route::post('/register', 'ReaderController@regiter')->name('reader.register');
Route::post('/login', 'ReaderController@login')->name('reader.login');

Route::get('/test/{slugArticle}','ArticleController@getArticleDetail');
