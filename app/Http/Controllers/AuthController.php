<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    //
    public function getRegister(){
        return view('auth.register');
    }

    public function postRegister(Request $request){
        $this->validate($request,[
            'username' =>'required|min:4|unique:users,username',
            'password' =>'required|min:6'

        ]);

        $user=User::create([
            'nama' =>$request->name,
            'nip' => $request->nip,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id
        ]);

        return redirect()->route('login');
    }

    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        
        if(!Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect()->back();
        }
        return redirect()->route('dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
