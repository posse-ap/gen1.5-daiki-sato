<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*----------
---admin----
-----------*/
Route::get('/admin', 'Admin\AdminController@index');







Route::get('/', 'QuizController@index');

Route::get('/quizy', 'QuizController@index');
Route::get('/quizy/{id}', 'QuizController@quizy')->name('quizy.display');

// Route::get('/login', 'LoginController@__construct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
