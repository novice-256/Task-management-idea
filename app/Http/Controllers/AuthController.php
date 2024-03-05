<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request , User $user){
        $credentials = $request->only('email','password');
        
        $is_auth= Auth::attempt($credentials);

    if(!$is_auth){
        return back();
    }
    return redirect('/');
    }
    public function logout(){
        Auth::logout();
        return redirect('auth/login');
    }   
    public function index(){
        return view('index');
    }   
}
