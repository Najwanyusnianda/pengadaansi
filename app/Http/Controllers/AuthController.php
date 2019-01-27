<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Person;

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
           
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'type' =>'user'
            
        ]);

        $person=Person::create([
            'nama' =>$request->name,
            'nip' => $request->nip,
            'role_id' => $request->role_id,
            'user_id' => $user->id
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
