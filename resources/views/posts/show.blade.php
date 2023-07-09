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
        @if (session('flash_message'))
            <div class="flash_message bg-success text-center py-3 my-0">
                {{ session('flash_message') }}
            </div>
        @endif
        <h1>{{ $post->title }}</h1>
            <div class="content">
            <h2>残っているタスク</h2>
                @foreach ($tasks as $task)
                    @if ($task->achievement == 0)
                        <h3>
                            <form action="/tasks/{{ $post->id }}/{{ $task->id }}/achievement" method="POST">
                            @csrf
                            @method('put')
                                ・{{ $task->volume }}
                                <input type="hidden" name="task[achievement]" value="1">
                                <input type="submit" value="達成"/>
                            </form>
                        </h3>
                    @endif
                @endforeach
            <h2>終わったタスク</h2>
                @foreach ($tasks as $task)
                    @if ($task->achievement == 1)
                        <h3>
                            ・{{ $task->volume }}
                        </h3>
                    @endif
                @endforeach
            </div>
        <div>
            <a href="/tasks/{{ $user->id }}/{{ $post->id }}">新規タスク追加</a>
        </div>
        <div>
            <a href="/home">ホームへ</a>
        </div>
    </body>
</html>

