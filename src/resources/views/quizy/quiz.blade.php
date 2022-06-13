@extends('layouts.index')

@section('contents')
    <div class="questions flex justify-center flex-col items-center">
        @foreach ($questions as $question)
            <div class="question">
                <h3 class="font-bold">{{ $loop->iteration }}.この地名はなんと読む</h3>
                <img src="/img/takanawa.png" alt="問題の写真">
                <ul class="w-auto text-sm font-medium text-gray-900">
                    @foreach ($question->choices as $choice)
                        <button
                            class="w-full hover:bg-gray-100 font-bold py-2 px-4 rounded mb-5 border border-gray-400 rounded-lg">
                            <li class="w-full px-4 py-2">
                                {{ $choice->name }}
                            </li>
                        </button>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
@endsection
