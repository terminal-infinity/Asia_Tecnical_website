<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('front.home');
    }

    public function about(){
        $member=Member::all();

        if(Auth::id()){
            $user=Auth::user();
            $user_id=$user->id;
        }
        return view('front.about',compact('member'));
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
