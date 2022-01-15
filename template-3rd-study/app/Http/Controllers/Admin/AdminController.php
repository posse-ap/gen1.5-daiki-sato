<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Choice;
use App\Model\Question;
use App\Model\BigQuestion;

class AdminController extends Controller
{
    public function index()
    {
        $big_question_data = BigQuestion::get();
        return view('admin.index', compact('big_question_data'));
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
        $question_param = new BigQuestion();

        $question_param->fill([
            'name' => $request->name,
        ]);
        $question_param->save();

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
