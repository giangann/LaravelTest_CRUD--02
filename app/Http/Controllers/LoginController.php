<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $validateData = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required',],
            ]
        );
    }
}
