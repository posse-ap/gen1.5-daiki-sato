@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-5">追加</h2>

        <form action="{{ route('admin.add') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">大問追加</label>
                <input name="name" placeholder="東京の難読地名クイズの選択肢" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
