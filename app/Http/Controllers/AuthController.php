<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\LoginRequest;
use App\Http\Requests\Users\CreateRequest;

class AuthController extends Controller
{
    public function registerShow()
    {
        return view('auth.register');
    }
    public function register(CreateRequest $r)
    {
        $data = $r->validated();

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        auth()->login($user);

        return to_route('home');
    }
    public function loginShow()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $r)
    {
        $data = $r->validated();

        if(auth()->attempt($data)){
            return to_route('home')->with('success', 'Вход выполнен!');;
        }
        else{
            return back()->withErrors([
                'name' => 'Неверные учетные данные',
                'password' => 'Неверный пароль'
            ]);
        }
    }
    public function logout()
    {
        auth()->logout();

        return to_route('main');
    }
}
