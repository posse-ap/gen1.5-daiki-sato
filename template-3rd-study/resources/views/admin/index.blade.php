@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    @foreach ($big_question_data as $big_question)
                        <p>{{ $big_question->name }}</p>

                        @foreach ($big_question->questions as $question)
                            <div class="border border-secondary p-3 my-2 d-flex">
                                <div class=" d-flex flex-column mr-auto">
                                    <div>
                                        <ul>
                                            @foreach ($question->choices as $choice)
                                                <li>
                                                    @if ($question->id == $choice->question_id)
                                                        ・{{ $choice->name }}
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <form action="{{ route('admin.add') }}" method="POST">
                                        @csrf
                                        <div class="mb-3 border border-secondar p-3 mt-2">
                                            <label class="form-label">選択肢追加</label>
                                            <div class="d-flex ">
                                                <input name="choices_param" placeholder="たかなわ" type="text"
                                                    class="form-control mr-3">
                                                <input name="valid" placeholder="1" type="number" class="form-control mr-3">
                                                <input name="question_id" type="hidden" class="form-control mr-3"
                                                    value="{{ $question->id }}">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="">
                                    <a class="btn btn-outline-primary mb-1"
                                        href="{{ route('admin.edit', ['id' => $question->id]) }}">編集</a>
                                    <form method="post" action="{{ route('admin.delete', $question->id) }}">
                                        {{ csrf_field() }}
                                        <input type="submit" value="削除" class="btn btn-outline-danger mb-1"
                                            onclick='return confirm("君は本当に削除するつもりかい？");'>
                                    </form>
                                </div>
                            </div>

                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
