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

    public function choice_add(Request $request)
    {
        $question_param = new Choice();

        $question_param->fill([
            'name' => $request->choices_param,
            'valid' => $request->valid,
            'question_id' => $request->question_id,
        ]);
        $question_param->save();

        return redirect(route('admin'));
    }


    /*---------------------------
    大問編集
    ---------------------------*/
    public function big_question_edit_show($id)
    {
        $big_question_data = BigQuestion::get();
        return view('admin.biq_question_edit', compact('big_question_data'));
    }

    public function big_question_edit(Request $request)
    {
        BigQuestion::where('id', $request->id)->update(['valid' => $request->name]);
        return redirect(route('admin'));
    }
    /*---------------------------
    大問編集
    ---------------------------*/
    public function big_question_delete(Request $request)
    {
        BigQuestion::find($request->id)->delete();
        return redirect(route('admin'));
    }


    /*---------------------------
    編集
    ---------------------------*/
    public function edit_show($id)
    {
        $big_question_data = BigQuestion::get();
        return view('admin.index', compact('big_question_data'));

        $quizy_ids = Question::where('id', $id)->get();

        return view('admin.edit', compact('quizy_ids'));
    }

    public function edit(Request $request)
    {
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
