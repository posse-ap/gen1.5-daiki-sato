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
    @foreach ($questions_data as $questions)

        <div class="question">
            <h1 class="question__title">{{ $questions->id }}.この地名はなんて読む？</h1>
            <img class="question__img" src="" alt="選択肢の写真">
            <ul class="question__lists">
                @foreach ($choices_data as $choices)
                    <li class="question__list">{{ $choices->name }}</li>
                @endforeach
            </ul>

            <div class="question__answer">
                <p class="question__answer__text">正解！</p>
                <p class="question__answer__text__choice">
                    @foreach ($choices_answer_data as $choices_answer)
                      正解は「
                      {{ $choices_answer->name }}
                      」です！
                    @endforeach
                </p>
            </div>
    @endforeach

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {{-- <script src="./js/index.js"></script> --}}
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/index.js') }}"></script>
</body>

</html>
