<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilerController extends Controller
{
    public function index(){
        return view("profile");
    }

    public function index2(){
        return view("coba");
    }

    public function login(){
        return view("login");
    }

    public function register(){
        return view("register");
    }
}


