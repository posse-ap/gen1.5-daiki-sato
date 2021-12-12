<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Choice;
use App\Model\Question;

class AdminController extends Controller
{
    public function index()
    {
        $quizy_ids = Question::get();

        $choice_data = Choice::get();
        return view('admin.index', compact('quizy_ids' , 'choice_data'));
    }


    // TODO:選択肢を追加すると、大問も追加されてしまう。
    /*---------------------------
    追加
    ---------------------------*/
    public function add_show()
    {
        return view('admin.add');
    }

    public function add(Request $request)
    {
        $question_param = new Question();

        $question_param->fill([
            'name' => $request->name,
        ]);
        // データベースに値をinsert
        $question_param->save();

        $choices_param = new Choice();

        $choices_param->fill([
            'name' => $request->choices_param,
            'valid' => $request->valid,
            'question_id' => $request->question_id,
        ]);
        // データベースに値をinsert
        $choices_param->save();

        return redirect(route('admin'));
    }

    
    /*---------------------------
    編集
    ---------------------------*/
    public function edit_show($id)
    {
        $quizy_ids = Question::where('id', $id)->get();

        return view('admin.edit', compact('quizy_ids'));
    }

    public function edit(Request $request)
    {
        // TODO:編集
        Question::where('id', $request->id)->update(['name' => $request->name]);
        // dd($request->id);
        // dd($request->name);

        return redirect(route('admin'));
    }

    /*---------------------------
    削除
    ---------------------------*/
    public function delete(Request $request)
    {
        Question::find($request->id)->delete();
        return redirect('/admin');
    }
}
