@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>編集</h2>

        @foreach ($big_question_data as $big_question)
            <form action="{{ route('admin.big_question_edit', $big_question->id) }}" method="POST">
                @csrf
                <div class="">
                    <div class="mb-3 border border-secondary p-3">
                        <label class="form-label font-weight-bold">大問編集</label>
                        <input name="name" placeholder="東京の難読地名クイズの選択肢" type="text" class="form-control"
                            value="{{ $big_question->name }}">の選択肢
                        <input name="id" type="hidden" value="{{ $big_question->id }}">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>

@endsection
