<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/app_home.css') }}">
    </head>
    <body>
        <div class="content">
            <h2>今日の行事</h2>
            <div>
            @foreach ($posts as $post)
                @if( \Carbon\Carbon::now()->format("Y-m-d")  ===  $post->eventday )
                    <h3 class="text">・{{ $post->title }}</h3>
                    <h4 class="text">内容：{{ $post->body }}</h4>
                @endif
            @endforeach
            </div>
        </div><br>
        <div class="content">
            <a href='/posts/event/{{ $user->id }}'>{{ $user->name }}さんの夏休みの予定</a>
        </div><br>
        <div class="content">
            <a href='/posts/show'>他の人の夏休みの過ごし方</a>
        </div>
        <h2 class="endday">夏休みは<span class="period">{{ $user->period_end}}</span>まで！</h2>
        <h2 class="endday">夏休み終了まで残り<span class="period">{{ $diff->m }}ヶ月{{ $diff->d }}日</span>！</h3>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" value="ログアウト">
        </form>
    </body>
</html>
