<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //

    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // validate
        $inputs = request()->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        // attempt to login
        if (!Auth::attempt($inputs)) {
            throw ValidationException::withMessages([
                'username' => 'Wrong username or password...'
            ]);
        }
        // regenerate token
        request()->session()->regenerate();
        return redirect('/home');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
