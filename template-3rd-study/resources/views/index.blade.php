<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>くいじー</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <div class="container">
            <a class="btn btn-primary p-2" href="{{ route('quizy.list') }}">クイズへ</a>
            <a class="btn btn-primary p-2" href="{{ route('admin') }}">管理者画面へ</a>
        </div>
    @endsection

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/index.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
