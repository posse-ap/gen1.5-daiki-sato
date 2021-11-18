<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Choice;
use App\Model\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    function index(){
        $quizy_ids = Question::get();

        return view('index' ,compact('quizy_ids'));
    }


    function quizy($id){

        $questions_data = Question::where('id', '=', $id)->get();
        $choices_data = Choice::where('question_id', '=', $id)->get();
        $choices_answer_data = Choice::where('question_id', '=', $id)->where('valid', '=', 1)->get();
        // dd($choices_data);


        return view('quizy' , compact('questions_data' , 'choices_data' , 'choices_answer_data'));
    }
}
