<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthBagianController extends Controller
{
    //
    public function getLogin(){
        return view('auth.loginBagian');
    }

    public function postLogin(Request $request){
        
        if (Auth::guard('bagian')->attempt(['username' => $request->username, 'password' => $request->password])) {

            return redirect()->route('register');
        }
        return redirect()->route('register');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('bagian.login.get');
    }

    public function index(){
        return view('pages.BagianDashboard');
    }


}
