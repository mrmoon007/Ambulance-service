<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller
{
    public function editAbout()
    {
        $about=About::first();
        return view('backend.pages.about.edit',compact('about'));
    }

    public function UpdatedAbout(Request $request,$id)
    {
        $about_image =  $request->file('image');
        
        if($request->hasFile('image')){

            $name_gen = hexdec(uniqid()).'.'.$about_image->getClientOriginalExtension();
            Image::make($about_image)->resize(450,450)->save('image/about/'.$name_gen);

            $last_img = 'image/about/'.$name_gen;
        }

        

        $about=About::find($id)->image;
        if (!empty($about_image)) {
            unlink($about);
        }

        About::find($id)->update([

            'shortTitle' => $request->shortTitle,
            'longTitle' => $request->longTitle,
            'description' => $request->description,
            'image' =>$about_image? $last_img: $about,

        ]);

        return Redirect()->back();
    }
}
