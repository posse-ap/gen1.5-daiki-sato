<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=385, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon" href="/img/mobile_icon.PNG" sizes="180x180">
    <link rel="icon" type="image/png" href="/img/mobile_icon.PNG" sizes="192x192">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @yield('meta')
    <title>quizy</title>
</head>

<body class="flex flex-col min-h-screen">
    <header class="bg-white">
        <div class="relative bg-white">
            <div class="mx-auto px-4 sm:px-6">
                <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <a href="#">
                            <img class="h-8 w-auto sm:h-10" src="{{ asset('/img/posseLogo.png') }}" alt="">
                        </a>
                    </div>
                    <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                        <a href="#"
                            class="mr-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-full shadow-sm text-base font-medium text-white bg-sky-400 hover:bg-sky-500">管理画面へ</a>
                        <a href="#"
                            class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">ログアウト</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="mb-10 flex-grow">
        <div class="container mx-auto">
            @yield('contents')
        </div>
    </main>
    <footer>
        <div class="w-full max-w-3xl flex mx-auto">
            <div class="flex justify-center flex-auto max-w-md w-64 bg-blue-500 text-white font-bold text-center py-4">
                <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                    </path>
                </svg>

                <span>参加予定(未回答)</span>
            </div>
            <div class="flex justify-center flex-auto max-w-md w-64 bg-lime-300 text-white font-bold text-center py-4">
                <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>今日の出欠</span>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>
