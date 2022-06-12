<?php

namespace App\Http\Controllers;

use App\BigQuestion;
use App\Question;

class IndexController extends Controller
{
    public function index()
    {
        $bigQuestions = BigQuestion::get();
        return view('quizy.index', compact("bigQuestions"));
    }

    public function show($id)
    {
        $questions = Question::where("id", $id)->get();
        return view('quizy.quiz', compact("questions"));
    }
}