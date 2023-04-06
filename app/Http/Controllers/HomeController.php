<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePageView(){
        return view('front-end.home.home');
    }
}
