<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required',
            'post' => 'required',
            'user_id' => 'required',
        ]);

        $post = Posts::create($validatedData);

        return redirect()->to('/');
    }
}
