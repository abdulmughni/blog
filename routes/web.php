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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('post/{slug}', 'AdminPostController@post')->name('post');

Route::group(['middleware'=>['admin']], function() {
    Route::get('/admin', 'AdminDashboardController@index')->name('admin');
    Route::resource('admin/user', 'AdminUserController');
    Route::resource('admin/post', 'AdminPostController');
    Route::resource('admin/category', 'AdminCategoriesController');
    Route::resource('admin/media', 'AdminMediaController');

    Route::delete('admin/delete/media', 'AdminMediaController@mediaDelete');

    Route::resource('admin/comments', 'PostCommentsController');
    Route::resource('admin/comment/replies', 'PostCommentRepliesController');
});



Route::group(['middleware'=>['auth']], function() {
    Route::post('comment/reply', 'PostCommentRepliesController@commentReply');
});