<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //
    public function show(User $user, Post $post)
    {
        $user = Auth::user();
        
        return view('tasks/show')->with(['user' => $user, 'post' => $post, 'tasks' => $post->getByTasks()]);
    }
    //新規課題登録画面に遷移する関数
    public function resister()
    {
        return view('users/create');
    }
    
    //homeに遷移する関数
    public function store(Request $request,Task $task, User $user)
    {
        $user = Auth::user();
        
        $input = $request['task'];
        $task->fill($input)->save();
        return redirect('/posts/event/'. $user->id);
    }
    public function achievement(Request $request, User $user, Post $post, Task $task)
    {
        $user = Auth::user();
        
        $input = $request['task'];
        $task->achievement = $input['achievement'];
        $task->save();
        
        return redirect('/posts/'. $user->id);
    }
}
