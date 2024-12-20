<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        if($user = User::query()
            ->where('email', '=', request()->email)
            ->first()) 
            {

                if(Hash::check(request()->password, $user->password))
                {
                    auth()->login($user);
                    return to_route('dashboard');
                };
            };

        return back()->with(['messagem'=>'Não encontrado']);
    }
}
