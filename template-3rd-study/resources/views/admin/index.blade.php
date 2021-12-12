@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    @foreach ($quizy_ids as $quizy_id)
                        <div class="border border-secondary p-3 my-2 d-flex">
                            <div class=" d-flex flex-column mr-auto">
                                <p class="mr-auto">
                                    <a href="{{ route('quizy.display', ['id' => $quizy_id]) }}">・{{ $quizy_id->name }}の選択肢</a>
                                </p>
                                <div>
                                    <ul>
                                        @foreach ($choice_data as $choice)
                                        <li>
                                            @if ($quizy_id->id == $choice->question_id)
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
                                            <input name="choices_param" placeholder="たかなわ" type="text" class="form-control mr-3">
                                            <input name="valid" placeholder="1" type="number" class="form-control mr-3">
                                            <input name="question_id"  type="hidden" class="form-control mr-3" value="{{ $quizy_id->id }}">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="">
                                <a class="btn btn-outline-primary mb-1" href="{{ route('admin.edit', ['id' => $quizy_id->id]) }}">編集</a>
                                <form method="post" action="{{ route('admin.delete', $quizy_id->id) }}">
                                    {{ csrf_field() }}
                                    <input type="submit" value="削除" class="btn btn-outline-danger mb-1" onclick='return confirm("君は本当に削除するつもりかい？");'>
                                </form>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
