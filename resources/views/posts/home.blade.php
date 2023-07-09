<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    </x-slot>
    <body>
        <h1>ホーム</h1>
        <div class="content">
            <h2>{{ $user->name }}さんの夏休みの予定</h2>
            <a href='/posts/event/{{ $user->id }}'>表示</a>
        </div><br>
        <div class="content">
            <h2>今日の行事</h2>
            <div>
            @foreach ($posts as $post)
                @if( \Carbon\Carbon::now()->format("Y-m-d")  ===  $post->eventday )
                    <h3>・{{ $post->title }}</h3>
                    <h4>内容：{{ $post->body }}</h4>
                @endif
            @endforeach
            </div>
        </div><br>
        <div class="content">
            <h2>ビジターの行事</h2>
            <a href='/posts/show'>表示</a>
        </div>
    </body>
</x-app-layout>
</html>
