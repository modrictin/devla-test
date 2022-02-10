<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            abort(401,'Credentials not match');
        }

        $token = $request->user()->createToken('bearer');

        return [
            'token' => $token->plainTextToken,
        ];
    }
}
