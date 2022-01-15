<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*----------------------------
Top
-----------------------------*/
Route::get('/', 'QuizController@index');


/*----------------------------
admin
-----------------------------*/
Route::prefix('admin')->group(function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');

    //  追加
    Route::get('/admin/add', 'Admin\AdminController@add_show')->name('admin.add_show');
    Route::post('/admin/add', 'Admin\AdminController@add')->name('admin.add');

    // 編集
    Route::get('/admin/edit/{id}', 'Admin\AdminController@edit_show')->name('admin.edit_show');
    Route::post('/admin/edit/{id}', 'Admin\AdminController@edit')->name('admin.edit');

    // 編集
    // Route::get('/admin/edit/{id}', 'Admin\AdminController@edit_show')->name('admin.edit_show');
    Route::post('/admin/delete/{id}', 'Admin\AdminController@delete')->name('admin.delete');
});

/*----------------------------
user
-----------------------------*/
Route::prefix('quizy')->group(function () {
    Route::get('/quizy', 'QuizController@index');
    Route::get('/quizy/list', 'QuizController@list')->name('quizy.list');
    Route::get('/quizy/show/{id}', 'QuizController@show')->name('quizy.show');
});

Auth::routes();
