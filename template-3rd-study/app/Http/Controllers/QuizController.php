<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\BigQuestion;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // Topページ
    function index(){
        return view('index');
    }

    // クイズ一覧
    function list(){
        $big_question_data = BigQuestion::get();
        return view('quizy.index' , compact( 'big_question_data' ));
    }


    // TODO:データをどのように送るか
    function show($id){
        $big_question_data = BigQuestion::where('id' , $id)->first();
        return view('quizy.quizy' , compact( 'big_question_data' ));
    }
}
