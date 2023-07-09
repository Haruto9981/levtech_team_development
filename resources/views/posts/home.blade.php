<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    </head>
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
        <h2>夏休みは{{ $user->period_end}}まで</h2>
        <h2>残り{{ $diff->m }}ヶ月{{ $diff->d }}日</h2>
        <div class="content">
            <h2>ビジターの行事</h2>
            <a href='/posts/show'>表示</a>
        </div>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" value="ログアウト">
        </form>
    </body>
</html>
