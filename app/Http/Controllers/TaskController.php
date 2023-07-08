<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    
    //新規課題登録画面に遷移する関数
    public function resister()
    {
        return view('users/create');
    }
    
    //homeに遷移する関数
    public function store(Request $request,Task $task)
    {
        $input=$request['task'];
        $task->fill($input)->save();
        return redirect('/posts/home/{user}');
    }
}
