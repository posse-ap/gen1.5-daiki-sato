<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/logout', 'Auth\LoginController@logout');

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

    // タイトルの編集
    Route::get('/admin/big_question_edit/{id}', 'Admin\AdminController@big_question_edit_show')->name('admin.big_question_edit_show');
    Route::post('/admin/big_question_edit/{id}', 'Admin\AdminController@big_question_edit')->name('admin.big_question_edit');
    Route::post('/admin/big_question_delete/{id}', 'Admin\AdminController@big_question_delete')->name('admin.big_question_delete');


    // 選択肢の追加
    Route::post('/admin/choice_add', 'Admin\AdminController@choice_add')->name('admin.choice_add');

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
