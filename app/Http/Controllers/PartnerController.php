<?php

namespace App\Http\Controllers;

use App\Models\ApprovedBy;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class PartnerController extends Controller
{
    ///approved_by
    public function approved_by(){
        $data=ApprovedBy::all();
        return view('admin.partials.partner.approved_by',compact('data'));
    }

    public function upload_approvedBy (Request $request){
        $request->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg,webp',
        ]);
        $q=20;
        if($files= $request->file('images')){
            $imageData = [];
            foreach($files as $file){
                $manager = new ImageManager(new Driver());
                $filename = time().'_'.$file->getClientOriginalName();
                $img = $manager->read($file);

                /* $img = $img->resize(300,300); */

                $img->toJpeg(80)->save(base_path('/public/logoImage/'.$filename),$q);

                $save_url = $filename;

                /* $path = "approvedBy_logos/";

                $file->move($path,$filename,$q); */

                $imageData[] =[
                    'images' => $save_url,
                ];
            }
        }
        
        ApprovedBy::insert($imageData);

        $notification = array(
            'message' => 'Logo Image Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }

    public function delete_approvedByImg($id){
        $data=ApprovedBy::findOrFail($id);

        $image_path=public_path('/public/logoImage/'.$data->image);
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
