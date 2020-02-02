<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create() {
        return view('layouts.user.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::create($validatedData);
        auth()->login($user);
        //Auth::login($user);

        return redirect()->to('/');
    }
}
