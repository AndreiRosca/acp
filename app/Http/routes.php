<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'LatestArticleController@getLatestArticles');

Route::get('/index', 'LatestArticleController@getLatestArticles');

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/list', 'ArticleController@getArticles');


Route::get('/about', function () {
    return view('about');
});


Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('blade', function () {
    return view('child');
});

