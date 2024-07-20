<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('front.home');
    }

    public function about(){
        return view('front.about');
    }

    public function course(){
        $course=Course::all();

        if(Auth::id()){
            $user=Auth::user();
            $user_id=$user->id;
        }

        return view('front.course',compact('course'));
    }
}
