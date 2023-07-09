<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/app_create.css') }}">
    </head>
    <body>
        <h1>{{ $post->title }}</h1>
        <form action="/tasks" method="POST">
            @csrf
            <div class="content">
                <h2>タスク名</h2>
                <input type="text" class="title" name="task[volume]" placeholder="準備、具体的な課題など" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="content">
                <h2>終わらせたい目標の日程</h2>
                <div class="text">
                    <label for="date2" class="col-form-label">日にちを入力</label>
                </div>
                <input type="date" class="date" id="date2" name="task[line]">
            </div>
            <div class="content">
                <h2>最終締め切りの日程</h2>
                <div class="text">
                    <label for="date2" class="col-form-label">日にちを入力</label>
                </div>
                <input type="date" class="date" id="date2" name="task[endline]">
            </div>
            <div>
                <input type="hidden" name="task[post_id]" value="{{ $post->id }}">
            </div>
            <div class="content">
                <input class="button" type="submit" value="登録"/>
            </div>
        </form>
    </body>
</html>

