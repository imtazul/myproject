<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageModel;
use Image;
use Stream;
class UploadController extends Controller
{
    public function viewpage(){
        $data = ImageModel::all();
    	return view('upload',['files' => $data]);
    }

    public function store(Request $request)
    {
       
        $filenames = $request->file('filename');
        foreach ($filenames as $rawImage) {
            $originalImage = Image::make($rawImage);
            $thumbnailPath = public_path().'/uploads/thumbnail/';
            $originalPath = public_path().'/uploads/image/';
            
            $name_only = $rawImage->getClientOriginalName();
            $user_id = 12345;
            $current_time = time();
            $name = $current_time.'_'.$user_id.'_'.$name_only;
            $originalImage->save($originalPath.$name);
            $originalImage->resize(150,150);
            // $originalImage->flip('v');
            //$originalImage->crop(100, 100, 25, 25);
            $originalImage->save($thumbnailPath.$name);


            $imagemodel= new ImageModel();
            $imagemodel->filename=$name;
            $imagemodel->save();
        }

        return back()->with('success', 'Your images has been successfully Uploaded');

    }
}
