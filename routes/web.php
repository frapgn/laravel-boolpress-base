<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', 'PostController@index')->name('posts');


// GUEST ------------------------------------------------------------------
Route::get('/', 'HomeController@index')->name('home');

// Posts
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');


// ADMIN ------------------------------------------------------------------
Auth::routes();
Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::get('home', 'AdminHomeController@index')->name('home');
        Route::resource('posts', 'AdminPostController');
    });
