<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Posts;

class Controller extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
//        $posts = Post::all();
//        return view('child', ['posts' => $posts]);

        $posts = Posts::with('user')->get();
        return view('child', ['posts' => $posts]);

//        $posts = Post::all();
//        return view('child')->with(['posts' => $posts]);

//        $posts = App\Post::find(1);

//        $users = DB::table('users')
//            ->join('posts', 'users.id', '=', 'posts.user_id')
//            ->select('users.*', 'posts.*')
//            ->get();

//        $posts = Posts::all();
//        $posts = Posts::with('user')->get();

//        $users = Users::with('posts')->get();
//        return view('child')->with(['users' => $users]);
        //return view('child')->with(['posts' => $posts]);

//        $user = new User;
//        $user = Auth::user();
//        $posts = $user->posts;
//        return View::make('child')->with('posts', $posts);
    }

    public function create() {
        $posts = DB::table('posts')->get();
        return view('child', ['posts' => $posts]);
    }

    public function post(Request $request) {
        $request->validate([
            'user' => 'required',
            'post' => 'required'
        ], [
            'name.required' => 'Name is required',
            'post.required' => 'post is required'
        ]);

        $post = new Post;
        $post->user = $request->user;
        $post->post = $request->post;
        $post->save();

        return back()->with('success', 'Post created successfully.');
    }
}
