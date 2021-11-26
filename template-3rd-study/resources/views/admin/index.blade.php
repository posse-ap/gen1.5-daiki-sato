@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>

                <div class="">
                    @foreach ($quizy_ids as $quizy_id)
                        <div class="border border-secondary p-3 my-2">
                            <p class=""><a href="{{ route('quizy.display', ['id' => $quizy_id]) }}">・{{ $quizy_id->name }}の選択肢</a>
                            </p>
                            <a class="btn btn-outline-primary" href="{{ route('admin.edit', ['id' => $quizy_id->id]) }}">編集</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
