<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.home');
    }

    public function about(){
        return view('front.about');
    }

    public function Courses(){
        return view('front.Courses');
    }
}
