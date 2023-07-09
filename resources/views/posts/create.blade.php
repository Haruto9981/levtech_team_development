<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/app_create.css') }}">
    </head>
    <body>
        <h1>やること登録！</h1>
        <form action="/posts/{{ $user->id }}/create" method="POST">
            @csrf
            <div class="content">
                <h2>タイトル</h2>
                <input type="text" class="title" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="content">
                <h2>内容</h2>
                <div class="FlexTextarea">
                    <div class="FlexTextarea__dummy" aria-hidden="true"></div>
                        <textarea class="FlexTextarea__textarea" name="post[body]" placeholder="夏休みは何をしようかな">{{ old('post.body') }}</textarea>
                    </div>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
            </div>
            
            <div class="content">
                <h2>実行日程</h2>
                <div class="text">
                    <label for="date2" class="col-form-label">日にちを入力</label>
                </div>
                <input type="date" class="date" id="date2" name="post[eventday]">
            </div>
            <div class="content">
                <h2>公表してもいい？</h2>
                <div class="text">
                    いいよ！<input type="radio" class="radiobutton" id="radio01" name="post[check]" value="1">
                    ダメ！<input type="radio" class="radiobutton" id="radio02" name="post[check]" value="0">
                </div>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="content">
                <input class="button" type="submit" value="登録"/>
            </div>
        </form>
        <div>
            <a href="/home">ホームへ</a>
        </div>
        <script>
            function flexTextarea(el) {
                const dummy = el.querySelector('.FlexTextarea__dummy')
                el.querySelector('.FlexTextarea__textarea').addEventListener('input', e => {
                    dummy.textContent = e.target.value + '\u200b'
                })
            }

        document.querySelectorAll('.FlexTextarea').forEach(flexTextarea)
        </script>
    </body>
</html>
