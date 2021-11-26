<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Choice;
use App\Model\Question;

class AdminController extends Controller
{
    public function index(){
        $quizy_ids = Question::get();

        return view('admin.index' , compact('quizy_ids'));
    }


    
    /*---------------------------
    追加
    ---------------------------*/
    public function add_show(){
        return view('admin.add');
    }

    public function add(Request $request){
        $question_param = new Question();

        $question_param->fill([
            'name' => $request->name,
        ]);
        // データベースに値をinsert
        $question_param->save();

        return redirect( route('admin') );
    }


    /*---------------------------
    編集
    ---------------------------*/
    public function edit_show($id){
        $quizy_ids = Question::where('id' , $id)->get();

        return view('admin.edit', compact('quizy_ids'));
    }

    public function edit(Request $request){
        // TODO:編集
        Question::where('id', $request->id)->update(['name' => $request->name]);
        // dd($request->id);
        // dd($request->name);

        return redirect( route('admin') );
    }

}
