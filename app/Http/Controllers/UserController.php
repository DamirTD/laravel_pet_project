<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $incomingFields = $request->validated();

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);
        auth()->login($user);

        return redirect('/');
    }

    public function login(LoginRequest $request)
    {
        $incomingFields = $request->validated();

        if (auth()->attempt(['name' => $incomingFields['login_name'], 'password' => $incomingFields['login_password']])) {
            $request -> session()->regenerate();
        }
        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
