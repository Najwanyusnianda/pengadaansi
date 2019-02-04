<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesBagianController extends Controller
{
    //
    public function index(){
        return view('layouts.master_bagian');
    }
}
