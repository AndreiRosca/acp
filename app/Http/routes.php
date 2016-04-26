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

Route::get('/admin', 'AdminTasksController@getAdminPage');

Route::get('/login', function () {
    return view('login');
});

Route::get('/list', 'ArticleController@getArticles');
Route::get('/list/{id}', 'ArticleController@getPublicationArticles');



Route::get('/about', function () {
    return view('about');
});


Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/search_handler', 'SearchController@getSearchResults');

Route::get('blade', function () {
    return view('child');
});

Route::post("/update_email","AdminTasksController@updateEmail");

Route::post("/update_password","AdminTasksController@updatePassword");

Route::post("/create_article","AdminTasksController@createArticle");

Route::post("/create_publication","AdminTasksController@createPublication");

Route::get('/admin', [
    'middleware' => 'auth',
    'uses' => 'LoginController@getAdminPage'
]);
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::post('/article_request', 'AddArticleRequestController@handleArticleRequest');

Route::get('/getArticle/{articleFileName}', 'ArticleController@getArticleFile');

Route::post('/delete_ad', 'AdController@handleAdDeletion');
Route::post('/insert_ad', 'AdController@handleAdInsertion');


Route::get('/ad_list', 'AdController@getAdList');

Route::get('/getAdImage/{adImageName}', 'AdController@getAdImage');