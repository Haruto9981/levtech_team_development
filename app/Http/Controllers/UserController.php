<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Modles\User;
use App\Models\Task;

class UserController extends Controller
{
    public function store_period(User $user, Request $request){
        $input = $request['user'];
        $post = fill($input)->save();
        return redirect('/home');
    }
}
