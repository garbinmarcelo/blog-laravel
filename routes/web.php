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

Route::get('/', 'PostsController@index');

Route::get('admin/posts', ['as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);
Route::get('admin/posts/create', ['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);
Route::post('admin/posts/store', ['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);
Route::get('admin/posts/edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostsAdminController@edit']);
Route::put('admin/posts/update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostsAdminController@update']);
Route::get('admin/posts/destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy']);
