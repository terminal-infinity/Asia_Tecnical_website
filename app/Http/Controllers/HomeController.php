<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $latestCourse= Course::orderBy('created_at','DESC')
                        ->get()
                        ->take(6);

        return view('front.home',compact('latestCourse'));
    }

    public function about(){
        $member=Member::all();

        return view('front.about',compact('member'));
    }

    public function course(){
        $course=Course::all();
        
        return view('front.course',compact('course'));
    }
}
