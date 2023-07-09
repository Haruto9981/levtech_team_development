<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/users_create.css') }}">
    </head>
    <body>
        <h1 class="center">夏休み期間の設定</h1>
        <div class="content">
            <form action="/create/{{ $user->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group center small">
                        <label for="date2" class="col-form-label">夏休みの始まり</label>
                        <input type="date" class="form-control center" id="date2" name="user[period_start]">
                </div>
                <div class="form-group center small">
                    <label for="date2" class="col-form-label">夏休みの終わり</label>
                    <input type="date" class="form-control center" id="date2" name="user[period_end]">
                </div>
                <br>
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary">決定</button>
                </div>
            </form>
    </body>
</html>
