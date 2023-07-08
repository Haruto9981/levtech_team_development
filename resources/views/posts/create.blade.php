<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
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
                <h2>やる日</h2>
                <input type="date" name="post[day]">
            </div>
            <div>
                <h2>締切日</h2>
                <input type="date" name="post[deadline]">
            </div>
            </div>
            <input type="submit" value="登録"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>
