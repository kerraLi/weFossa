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
Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'HomeController@index');
    Route::match(['get', 'post'], '/login', 'HomeController@login');
    Route::match(['get', 'post'], '/register', 'HomeController@register');
    Route::get('/logout', 'HomeController@logout');

    /**
     * 博客
     */
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'BlogController@index');
        Route::get('/list', 'BlogController@list');
        Route::get('/detail/{id}', 'BlogController@detail');
    });

    /**
     * 评论
     */
    Route::group(['prefix' => 'comment'], function () {
        Route::get('/list', 'CommentController@list');
        Route::get('/add', 'CommentController@add');
    });
});
