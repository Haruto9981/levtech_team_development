<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Task;

class UserController extends Controller{

    public function create(){
        return view('users/create');
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
