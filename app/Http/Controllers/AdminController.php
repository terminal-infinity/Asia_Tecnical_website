<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Gallary;
use App\Models\Image;
use App\Models\Member;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.pages.index');
    } // end method


    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }   // end method

    public function AdminLogin(){

        return view('admin.pages.admin_login');
    }   // end method

    public function AdminProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.pages.admin_profile_view', compact('profileData'));
    }   // end method


    public function AdminProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);

        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);

    }   // end method

    public function AdminChangePassword(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.pages.admin_change_password',compact('profileData'));
    }   // end method

    public function AdminUpdatePassword(Request $request){

        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        // Match the old password
        if(!Hash::check($request->old_password, auth::user()->password)){

            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
            );

            return back()->with($notification);
        }

        // Update the new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);

    }   // end method


    ///Category 
    public function view_category(){
        $data=Category::all();

        return view('admin.partials.category',compact('data'));
    }

    public function add_category(Request $request){
        $category=new Category();
        $category->category_name = $request->category;
        $category->save();

        $notification = array(
            'message' => 'Category Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()-> back()->with($notification); 
    }

    public function edit_category($id){
        $data=Category::find($id);
        
        return view('admin.partials.edit_category',compact('data'));
    }

    public function update_category(Request $request,$id){
        $data=Category::find($id);
        $data->category_name=$request->category;
        $data->save();

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_category')->with($notification);
    }

    public function delete_category($id){
        $data=Category::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    //Course Functions
    public function add_course(){
        $category=Category::all();
        return view('admin.partials.course',compact('category'));
    }

    public function upload_course(Request $request){
        $data=new Course;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->category = $request->category;

        $image=$request->image;
        if($image){
            $imagename = time(). '.'. $image->getClientOriginalExtension();

            $request->image->move('course_img',$imagename);

            $data->image= $imagename;
        }
        
        $data->save();

        $notification = array(
            'message' => 'Course Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_course')->with($notification); 
    }
    public function view_course(){
        $course=Course::paginate(5);
        return view('admin.partials.view_coures',compact('course'));
    }

    public function update_course($id){
        $data=Course::find($id);
        $category=Category::all();

        return view('admin.partials.update_course',compact('data','category'));
    }

    public function edit_course(Request $request,$id){
        $data=Course::find($id);
        $data->title=$request->title;
        $data->description = $request->description;
        $data->category = $request->category;
        $image=$request->image;
        if($image){
            $imagename = time(). '.'. $image->getClientOriginalExtension();

            $request->image->move('course_img',$imagename);

            $data->image= $imagename;
        }
        $data->save();

        $notification = array(
            'message' => 'Course Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_course')->with($notification); 
    }

    public function delete_course($id){
        $data=Course::find($id);

        $image_path=public_path('/course_img/ '.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Course Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }


    //Members Functions
    public function view_member(){
        $member=Member::paginate(5);
        return view('admin.partials.view_member',compact('member'));
    }

    public function add_member(){
        return view('admin.partials.add_member');
    }

    public function upload_member(Request $request){
        $data=new Member;
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->fb_url = $request->fb_url;
        $data->tw_url = $request->tw_url;
        $data->in_url = $request->in_url;

        $image=$request->image;
        if($image){
            $imagename = time(). '.'. $image->getClientOriginalExtension();

            $request->image->move('member_img',$imagename);

            $data->image= $imagename;
        }
        
        $data->save();

        $notification = array(
            'message' => 'Member Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_member')->with($notification); 
    }

    public function update_member($id){
        $data=Member::find($id);

        return view('admin.partials.update_member',compact('data'));
    }

    public function edit_member(Request $request,$id){
        $data=Member::find($id);
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->fb_url = $request->fb_url;
        $data->tw_url = $request->tw_url;
        $data->in_url = $request->in_url;
        $image=$request->image;
        if($image){
            $imagename = time(). '.'. $image->getClientOriginalExtension();

            $request->image->move('member_img',$imagename);

            $data->image= $imagename;
        }
        $data->save();

        $notification = array(
            'message' => 'Course Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_member')->with($notification); 
    }

    public function delete_member($id){
        $data=Member::find($id);

        $image_path=public_path('/member_img/ '.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Member Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    //Service Function
    public function view_service(){
        $service=Service::paginate(5);
        return view('admin.partials.view_service',compact('service'));
    }

    public function add_service(){
        return view('admin.partials.add_service');
    }

    public function upload_service(Request $request){
        $data=new Service();
        $data->title = $request->title;
        $data->description = $request->description;

        $image=$request->image;
        if($image){
            $imagename = time(). '.'. $image->getClientOriginalExtension();

            $request->image->move('service_img',$imagename);

            $data->image= $imagename;
        }
        
        $data->save();

        $notification = array(
            'message' => 'Course Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_service')->with($notification); 
    }

    public function update_service($id){
        $data=Service::find($id);

        return view('admin.partials.update_service',compact('data'));
    }

    public function edit_service(Request $request,$id){
        $data=Service::find($id);
        $data->title=$request->title;
        $data->description = $request->description;
        $image=$request->image;
        if($image){
            $imagename = time(). '.'. $image->getClientOriginalExtension();

            $request->image->move('service_img',$imagename);

            $data->image= $imagename;
        }
        $data->save();

        $notification = array(
            'message' => 'service Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_service')->with($notification); 
    }

    public function delete_service($id){
        $data=Service::find($id);

        $image_path=public_path('/service_img/ '.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'service Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }


    ///Image 
    public function view_image(){
        $image=Image::all();
        return view('admin.partials.image',compact('image'));
    }

    public function upload_image(Request $request){
        if($request->file('image')){
            $takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
            $img = $manager->read($takeimage);
            $img = $img->resize(400,300);

            $img->toJpeg(80)->save(base_path('/public/gallary/'.$name_gen));

            $save_url = $name_gen;
            
            Image::insert([
                'image' => $save_url
            ]);
        }
        $notification = array(
            'message' => 'Image Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()-> back()->with($notification); 
    }

    public function delete_image($id){
        $data=Image::find($id);

        $image_path=public_path('/gallary/ '.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }
}
