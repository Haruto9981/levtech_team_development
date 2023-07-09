<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{ $post->title }}</h1>
        <form action="/tasks" method="POST">
            @csrf
            <div>
                <h2>やらなければならないこと！</h2>
                <input type="text" name="task[volume]" placeholder="準備、具体的な課題など" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div>
                <h2>終わらせたい目標の日程</h2>
                <div class="form-group">
                    <label for="date2" class="col-form-label">日にちを入力</label>
                    <input type="date" class="form-control" id="date2" name="task[line]">
                </div>
                <h2>最終締め切りの日程</h2>
                <div class="form-group">
                    <label for="date2" class="col-form-label">日にちを入力</label>
                    <input type="date" class="form-control" id="date2" name="task[endline]">
                </div>
                
            </div>
            <div>
                <input type="hidden" name="task[post_id]" value="{{ $post->id }}">
            </div>
            <input type="submit" value="登録"/>
        </form>
    </body>
</html>

