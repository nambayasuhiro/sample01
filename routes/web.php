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
Route::get('/posts', 'PostController@index');
Route::resource('posts', 'PostController');
Route::resource('blogs', 'BlogController');
Route::resource('profiles', 'ProfileController');

Route::post('blogs/cleate', 'BlogController@create');

Route::get('/', 'TopController@index');
Route::get('/blogs', 'TopController@blog');
Route::get('/profiles', 'TopController@profile');



 if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
 }
Auth::routes();

//Route::get('/posts', 'PostsController@index')->name('posts');
