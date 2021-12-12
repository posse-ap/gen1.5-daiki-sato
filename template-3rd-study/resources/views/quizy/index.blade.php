<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クイズ一覧</title>
</head>
<body>
  <div class="container">
    <ul class="list-group">
      @foreach ($big_question_data as $big_question)
        <li class="list-group-item"><a href="{{ route('quizy.show' , [ $big_question->id ]) }}">{{ $big_question->name }}のクイズ</a></li>
      @endforeach
    </ul>

  </div>
  
</body>
</html>