<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*----------------------------
admin
-----------------------------*/
Route::get('/admin', 'Admin\AdminController@index')->name('admin');

//  追加
Route::get('/admin/add', 'Admin\AdminController@add_show')->name('admin.add_show');
Route::post('/admin/add', 'Admin\AdminController@add')->name('admin.add');

// 編集
Route::get('/admin/edit/{id}', 'Admin\AdminController@edit_show')->name('admin.edit_show');
Route::post('/admin/edit/{id}', 'Admin\AdminController@edit')->name('admin.edit');




/*----------------------------
user
-----------------------------*/
Route::get('/', 'QuizController@index');
Route::get('/quizy', 'QuizController@index');
Route::get('/quizy/{id}', 'QuizController@quizy')->name('quizy.display');


Auth::routes();