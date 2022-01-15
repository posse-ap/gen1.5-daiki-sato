<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>くいじー</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="question">
        @foreach ($big_question_data->questions as $question)
            <h2 class="question__title">{{$loop->index + 1}}.この地名はなんて読む？</h2>
            <img class="question__img" src="{{ asset('/img/'.$question->id.'.png') }}" alt="選択肢の写真">

            <ul class="question__lists">
                @foreach ($question->choices as $choice)
                    <li class="question__list">{{ $choice->name }}</li>
                @endforeach
            </ul>
        @endforeach
    </div>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/index.js') }}"></script>
</body>

</html>
