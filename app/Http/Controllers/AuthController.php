<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    
    public function postlogin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
        ]);
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect(route('home'));
        }else{
            return route('login');
        }
    }

    public function register(){
        return view('auth.register');
    }
    
    public function postregister(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required',
            'pass' => 'required|min:6',
        ]);
        $request['type'] = 'free';
        $request['password'] = bcrypt($request->pass);
        $user = User::create($request->all());
        $user->save();
        
        return redirect(route('login'));
    }
}
