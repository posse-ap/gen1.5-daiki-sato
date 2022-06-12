@extends('layouts.index')

@section('contents')
    @foreach ($questions as $question)
        <div class="container">
            <h3>この地名はなんと読む</h3>
            <ul
                class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @foreach ($question->choices as $choice)
                    <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        {{ $choice->name }}</li>
                @endforeach
            </ul>
        </div>
    @endforeach
@endsection
