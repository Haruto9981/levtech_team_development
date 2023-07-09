<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Task;

class UserController extends Controller{

    public function create(User $user){
        $user = Auth::user();
        
        //期間設定をしているならHOMEに飛ぶ条件分岐が必要
        if ($user->period_start == NULL)
        {
            return view('users/create')->with(['user' => $user]);
        }
        else 
        {
            return redirect('/home'); 
        }
    }
    
    public function store_period(User $user, Request $request){
        $input = $request['user'];
        $user->period_start = $input['period_start'];
        $user->period_end = $input['period_end'];
        $user->save();
        
        return redirect('/home');
    }

    public function show(User $user, Post $post)
    {
        return view('users/show')->with(['user' => $user, 'posts' => $user->getByPosts()]);
    }
}
