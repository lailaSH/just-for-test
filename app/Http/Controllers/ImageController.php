<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class ImageController extends Controller
{
    public function store_image(Request $request){
       
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image_name =$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/images/'.time(),$image_name);  
         
    }



}
