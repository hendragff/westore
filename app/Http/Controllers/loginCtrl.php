<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginCtrl extends Controller
{
    public function index(){
        return view('login');
    }
}
