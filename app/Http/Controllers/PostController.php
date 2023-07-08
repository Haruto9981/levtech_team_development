<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function home(Post $post, User $user)
    {
        return view('posts/home')->with(['posts' => $user->getByPosts(), 'user' => $user]);
    }
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    public function show(User $user, Post $post)
    {
        $user = Auth::user();
        
        return view('posts/show')->with(['post' => $post, 'user' => $user, 'tasks' => $post->getByTasks()]);
    }

    public function create(User $user)
    {
        return view('posts/create')->with(['user' => $user]);
    }

    public function store(Post $post, Request $request)
    {
        $user = Auth::user();
        
        $input = $request['post'];
        $post->title = $input['title'];
        $post->body = $input['body'];
        $post->user_id = $user->id;
        $post->save();
        
        return redirect('/tasks/' . $user->id .'/'. $post->id);
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/event/'. $user->id);
    }
    public function delete(User $user, Post $post)
    {
        $user = Auth::user();
        $post->delete();
        
        return redirect('/posts/event/'. $user->id);
    }
}
