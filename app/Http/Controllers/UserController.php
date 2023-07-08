<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Task;

class UserController extends Controller{

    public function create(User $user){
        //期間設定をしているならHOMEに飛ぶ条件分岐が必要
        if (user[period_start] == NULL)
        {
            return view('users/create');
        }
        else 
        {
            return redirect('/home/'. $user->id); 
        }
    }
    
    public function store_period(User $user, Request $request){
        $input = $request['user'];
        $user->fill($input)->save();
        return redirect('/home/'. $user->id);
    }

    public function show(User $user)
    {
        return view('users/show')->with(['user' => $user]);
    }
}
