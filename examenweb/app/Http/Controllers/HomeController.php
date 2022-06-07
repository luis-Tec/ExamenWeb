<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Vista HOME
class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
}
