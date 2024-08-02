<?php

namespace App\Http\Controllers;

use App\Models\ApprovedBy;
use App\Models\Course;
use App\Models\Image;
use App\Models\Member;
use App\Models\Notice;
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

        $document =Notice::orderBy('created_at','DESC')
                    ->get()
                    ->take(5);

        $approvedLogo= ApprovedBy::all();
        
        return view('front.home',compact('latestCourse','latestservice','document','approvedLogo'));
    }

    public function about(){
        $member=Member::all();
        $latestservice= Service::all();
        $image=Image::all(); 
        return view('front.about',compact('member','latestservice','image'));
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

    public function notice(){
        $latestservice= Service::all();
        $document =Notice::orderBy('created_at','DESC')->get();

        return view('front.notice',compact('latestservice','document'));
    }
}
