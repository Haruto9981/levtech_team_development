<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    </head>
    <body>
        <h1>やること登録！</h1>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div>
                <h2>内容</h2>
                <textarea name="post[body]" placeholder="夏休みは何をしようかな">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div>
                <h2>日程</h2>
                <div class="form-group">
                    <label for="date2" class="col-form-label">日にちを入力</label>
                    <input type="date" class="form-control" id="date2" name="post[eventday]">
                </div>
            </div>
            <input type="submit" value="登録"/>
        </form>
        <div>
            <a href="/home">ホームへ</a>
        </div>
    </body>
</html>
