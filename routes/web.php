<?php
use Symfony\Component\Routing\RequestContext;

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

Route::get('/home', 'PostController@index')->name('posts.index');

Route::group(['prefix' => 'posts'], function(){
  Route::get('/create', 'PostController@create')->name('posts.create');
  Route::post('/store', 'PostController@store')->name('posts.store');
  Route::get('{post}', 'PostController@show')->name('posts.show');
  Route::post('/{post}/favourites', 'FavouriteController@assign')->name('posts.favourite');
});


Route::group(['prefix' => 'profile'], function(){
  Route::get('profile/{user}', 'ProfileController@show')->name('profile.show');
  Route::get('/{user}/favourites', 'ProfileController@favourites')->name('profile.favourites');
});
