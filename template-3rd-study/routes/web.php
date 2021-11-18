<?php
use Illuminate\Support\Facades\Route;


Route::get('/', 'QuizController@index');
Route::get('/quizy/{id}', 'QuizController@quizy')->name('quizy.display');
