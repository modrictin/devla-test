<?php

namespace App\Http\Controllers;


use App\Models\User;
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

        $abilities = [];

        if($request->user()->type == User::TYPE_SHOP_ADMIN){
            $abilities = [User::TYPE_SHOP_ADMIN];
        }

        $token = $request->user()->createToken('bearer',$abilities);

        return [
            'token' => $token->plainTextToken,
        ];
    }
}
