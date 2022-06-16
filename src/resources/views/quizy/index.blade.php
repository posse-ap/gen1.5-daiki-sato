@extends('layouts.index')

@section('contents')
    <h1>くいず</h1>
    @foreach ($bigQuestions as $bigQuestion)
        <div class="flex flex-col mb-5">
            <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                href="{{ route('quiz', ['bigQuestionId' => $bigQuestion->id]) }}">{{ $bigQuestion->name }}</a>
        </div>
    @endforeach
@endsection
