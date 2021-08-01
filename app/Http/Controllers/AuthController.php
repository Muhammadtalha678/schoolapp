<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

     public function loginPost()
    {
    	return view('auth.login');
    }

    public function register()
    {
    	return view('auth.register');
    }

     public function registerPost(Request $request)
    {
    	$data = $request->all();
    	$name = $data['name'];
    	$email = $data['email'];
    	$password = $data['password'];
    	$confirm_password = $data['confirm_password'];

    	$user = new User;
    	if ($password == $confirm_password) {
    	$user->name = $name;
    	$user->email = $email;
    	$user->password = $password;
    		$user->save();
    		return redirect('/login');
    	}
    	else{
    		return redirect('/register');
    	}
    }

    public function forgotPassword()
    {
    	return view('auth.forgot-password');
    }
}
