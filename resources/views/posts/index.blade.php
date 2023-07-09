<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    </head>
    <body>
        <h1>ほかの人の夏休みの過ごし方</h1>
            <div　class="content">
                @foreach ($posts as $post)
                    <h3>・{{ $post->title }}</h3>
                    <h4>内容：{{ $post->body }}</h4>
                @endforeach
        <div>
            <a href="/home">ホームへ</a>
        </div>
    </body>
</html>

