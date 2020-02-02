<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create() {
        return view('layouts.sessions.create');
    }

    public function store() {
        if(auth()->attempt(request(['username', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The user or password is incorrect, please try again'
            ]);
        }

        return redirect()->to('/');
    }

    public function destroy() {
        auth()->logout();

        return redirect()->to('/');
    }
}
