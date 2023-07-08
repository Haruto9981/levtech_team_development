<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ホーム</h1>
        <div class="content">
            <h2>{{ $user->name }}さんの夏休みの予定</h2>
            <a href='/posts/event/{{ $user->id }}'>表示</a>
        </div>
        <div class="content">
            <h2>今日の行事</h2>
            <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <a href='//posts/{{ $post->id }}'>・{{ $post->title }}</p>
                </div>
            @endforeach
            </div>
        </div>
        <div class="content">
            <h2>ビジターの行事</h2>
            <a href='/posts/show'>表示</a>
        </div>
    </body>
</html>
