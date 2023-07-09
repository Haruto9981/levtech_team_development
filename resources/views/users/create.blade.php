<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">

    </head>
    <body>
        <h1>夏休み期間の設定</h1>
        <div class="content">
            <form action="/create/{{ $user->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="date2" class="col-form-label">日にちを入力</label>
                    <input type="date" class="form-control" id="date2" name="user[period_start]">
                </div>
                <div class="form-group">
                    <label for="date2" class="col-form-label">日にちを入力</label>
                    <input type="date" class="form-control" id="date2" name="user[period_end]">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">送信</button>
                </div>
            </form>
    </body>
</html>
