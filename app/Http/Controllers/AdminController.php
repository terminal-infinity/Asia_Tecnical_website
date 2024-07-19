<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
}
