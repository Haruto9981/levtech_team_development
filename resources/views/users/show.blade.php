<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    </head>
    <body>
        <h1>行事表示</h1>
        <div　class="content">
            <h2>残っている行事</h2>
            <div>
            @foreach ($posts as $post)
                <h3>・{{ $post->title }}</h3>
                <h4>{{ $post->body }}</h4>
                <a href="/posts/{{ $post->id }}">やるべきタスク</a><br>
                <a href="/posts/{{ $post->id }}/edit">編集</a>
                <form action="/posts/event/{{ $user->id }}/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                </form>
            @endforeach
            </div>
            <h2>終わった行事</h2>
        </div>
        <div>
            <a href="/posts/{{ $user->id }}/create">新規行事追加</a>
        </div>
        <div>
            <a href="/home">ホームへ</a>
        </div>
        <script>
            function deletePost(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>

