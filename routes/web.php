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

// BlogController
Route::get('/','BlogController@index');
Route::get('/blog','BlogController@blog');
Route::get('/about', 'BlogController@about');
Route::get('/contact', 'BlogController@contact');
Route::get('/post/{id}', 'BlogController@post');

// ContactController
Route::post('contact', 'ContactController@store');

// CommentController
Route::post('post', 'CommentController@store');
Route::get('comments/{id}', 'CommentController@comments');
Route::delete('delete_comment/{id}', 'CommentController@destroy');


Auth::routes();

// HomeController
Route::get('/home', 'HomeController@index')->name('home');

// PostController
Route::get('create_post', 'PostController@create');
Route::post('create_post', 'PostController@store');
Route::get('mng_posts',   'PostController@index');
Route::get('show_post',   'PostController@show_post');
Route::get('show_page',   'PostController@show_page');
Route::get('show_post/{id}', 'PostController@show');
Route::get('edit_post/{id}', 'PostController@edit');
Route::patch('update_post/{id}', 'PostController@update');
Route::delete('delete_post/{id}', 'PostController@destroy');

// UserController
Route::get('create_user', 'UserController@create');
Route::post('create_user', 'UserController@store');
Route::get('mng_users',   'UserController@index');
Route::get('edit_user/{id}', 'UserController@edit');
Route::patch('update_user/{id}', 'UserController@update');
Route::delete('delete_user/{id}', 'UserController@destroy');



