<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function welcome(Request $request) {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        return view('welcome', compact('firstName', 'lastName'));
    }
}
