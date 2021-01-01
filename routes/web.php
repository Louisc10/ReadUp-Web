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

Route::get('/', 'UserController@home');
Route::get('/hot', 'UserController@hot');

Route::get('/read/{id}', 'BookController@getBookDetail');
Route::get('/read/{bookId}/{chapterId}', 'ChapterController@getChapter');

Route::get('/login', 'UserController@loginGet');

Route::post('/login', 'UserController@loginPost');

Route::get('/register', 'UserController@registerGet');

Route::post('/register', 'UserController@registerPost');

Route::get('/logout', 'UserController@logout');

Route::get('/genre', 'GenreController@showAll');
Route::get('/popular', 'GenreController@popularGenre');

Route::get('/genre/{id}', 'GenreController@showComicByGenre');
