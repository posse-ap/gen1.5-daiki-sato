@extends('layouts.app')

@section('content')
<div class="container">
  <h2>編集</h2>

  @foreach ($quizy_ids as $quizy_id)
  <form action="{{ route('admin.edit' , $quizy_id->id) }}" method="POST">
    @csrf
    <div class="">
          <div class="mb-3 border border-secondary p-3">
            <label class="form-label font-weight-bold">大問編集</label>
            <input name="name" placeholder="東京の難読地名クイズの選択肢" type="text" class="form-control" value="{{$quizy_id->name}}">の選択肢
            <input name="id" type="hidden" value="{{$quizy_id->id}}">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        @endforeach
    </div>
  </form>
</div>

@endsection