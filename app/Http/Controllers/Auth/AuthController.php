<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('auth.login');
    }
    public function login(Request $request){
        $validation = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt(['email'=> $request->email,'password'=>$request->password])){
          return redirect()->route('home');
        }else{
            return back()->withErrors('Invalid email and password! Please try again.');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
