<?php

namespace App\Http\Controllers;

use App\BigQuestion;

class IndexController extends Controller
{
    public function index()
    {
        $bigQuestions = BigQuestion::get();
        return view('quizy.index', compact("bigQuestions"));
    }
}