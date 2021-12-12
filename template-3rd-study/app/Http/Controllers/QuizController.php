<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\BigQuestion;
use App\Model\Question;
use App\Model\Choice;
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

        $big_question_data = BigQuestion::where( 'id' , $id )->first();
        // dd($big_question_data->questions->first());
        // $choice_data = Question::where('question_id', '=', $id)->get();
        // $choice_data = Choice::where('question_id', '=', $id)->where('valid', '=', 1)->get();



        return view('quizy.quizy' , compact( 'big_question_data' ));
    }
}
