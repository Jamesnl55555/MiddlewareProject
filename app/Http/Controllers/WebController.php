<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class WebController extends Controller
{
    public function loginpage(){
        return view('loginpage');
    }
    public function login(Request $request){
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'

       ]);

       if(Auth::attempt($user)){
        
        $request->session()->regenerate();
        return redirect('dashboard');
       }
       else{
        return back()->withErrors(['error' => 'Invalid credentials.']);
       }

    }

    public function registerpage(){
        return view('registerpage');
    }
    public function register(Request $request){
        $val = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm' => 'required'
        ]);
        if (User::where('email', $val['email'])->exists()){
            return back()->withErrors(['error' => 'Email account is already made in this site']);
        }
        if ($val['password'] != $val['confirm']){
            return back()->withErrors(['error' => 'Confirmed Password Incorrect']);
        }
        $val['password'] = bcrypt($val['password']);
        $user = User::create($val);
        Auth::login($user);

        return redirect('/dashboard');
    }


    public function dashboard(){
        return view('dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
