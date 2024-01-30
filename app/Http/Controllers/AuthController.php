<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\error;

class AuthController extends Controller
{
    public function login()
    {   
        if(!empty(Auth::check()))
        {
            return redirect('admin/dashboard');
        }
        return view('auth.login');
    }

    public function AuthLogin(Request $request)
    {
        $pass = $request->password;
        if(Auth::attempt(['email' => $request->email, 'password' => bcrypt($pass) ]))
        {
            return redirect('admin/dashboard');
        }
        else
        {
            return redirect()->back()->with('error', 'Please check your Email or Password again');
        }
    }


}
 