<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    //
    public function index(){
        return view('pages.management.user_index');
    }
}
