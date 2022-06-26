@extends('layouts.index')

@section('contents')
    <div class="flex flex-col mb-5">
        <span class="mt-3 ml-2">ようこそ1.5 佐藤大暉さん</span>
        <div class="container mx-auto p-5">
            <div class="flex buttons my-3">
                <button type="button" class="px-3 py-2 text-md font-bold mr-2 rounded-md shadow-md bg-white h-15">全て</button>
                <button type="button" class="px-3 py-2 text-md font-bold mr-2 rounded-md shadow-md bg-white h-15">参加</button>
                <button type="button"
                    class="px-3 py-2 text-md font-bold mr-2 rounded-md shadow-md bg-white h-15">不参加</button>
                <button type="button"
                    class="px-3 py-2 text-md font-bold mr-2 rounded-md shadow-md bg-white h-15">提出済み</button>
                <button type="button"
                    class="px-3 py-2 text-md font-bold mr-2 rounded-md shadow-md bg-white h-15 bg-blue-500 text-white">未回答</button>
            </div>

            <span>一覧</span>

            <div class="events mt-3">

                @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10] as $item)
                    <div class="bg-white dark:bg-slate-800 rounded-lg px-4 py-6 ring-1 ring-slate-900/5 shadow-xl my-3">
                        <h3 class="text-slate-900 dark:text-white text-base font-medium tracking-tight font-bold">1期生新ハ後ご飯
                        </h3>
                        <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">2022年07月03日（日）</p>
                        <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">21:00~22:59</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
