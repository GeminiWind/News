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
});

Route::get('/about', function() {
  return view('frontend.pages.about');
});

Route::get('/tech', function() {
  return view('frontend.pages.tech');
});

Route::get('/book', function() {
  return view('frontend.pages.book');
});

Route::get('/sports', function() {
  return view('frontend.pages.sports');
});

Route::post('/register', 'ReaderController@regiter')->name('reader.register');
Route::post('/login', 'ReaderController@login')->name('reader.login');
Route::get('/test','ReaderController@test');
