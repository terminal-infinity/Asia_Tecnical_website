<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Member;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $latestCourse= Course::orderBy('created_at','DESC')
                        ->get()
                        ->take(6);
        
        $latestservice= Service::all();
        
        return view('front.home',compact('latestCourse','latestservice'));
    }

    public function about(){
        $member=Member::all();
        $latestservice= Service::all();

        return view('front.about',compact('member','latestservice'));
    }

    public function course(){
        $course=Course::all();
        $latestservice= Service::all();
        
        return view('front.course',compact('course','latestservice'));
    }

    

    public function service_details($id){
        $service=Service::find($id);
        $latestservice= Service::orderBy('created_at','ASC')
                        ->get();
        return view('front.service_details',compact('service','latestservice'));
    }
}
