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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();


//ログアウト中のページ
Route::get('/login', 'Auth\LoginController@login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');

//ログイン中のページ

Route::get('/top','PostsController@index');
Route::post('/top','PostsController@store');
Route::post('/top/update','PostsController@update');
Route::get('/top/{id}/delete','PostsController@delete');

Route::get('/profile','UsersController@profile');
Route::post('/profile','UsersController@update');

Route::get('/search','UsersController@search');
Route::get('/search','UsersController@result');
Route::get('/search/{id}/follow_link','UsersController@follow');
Route::get('/search/{id}/unfollow_link','UsersController@unfollow');

Route::get('/follow-List','FollowsController@followList');
Route::get('/follower-List','FollowsController@followerList');

Route::get('/user_profile/{id}','UsersController@userProfile');
Route::get('/user_profile/{id}/follow_link','UsersController@follow');
Route::get('/user_profile/{id}/unfollow_link','UsersController@unfollow');

Route::get('/logout','Auth\LoginController@logout');
// });
