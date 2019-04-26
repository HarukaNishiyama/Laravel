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

Route::get('/', function () {
    return view('welcome');
});

// name()をしておくとあとで楽ちんになる
Route::get('/articles','ArticleController@index')->name('article.list');
Route::get('/articles{id}','ArticleController@show')->name('article.show');