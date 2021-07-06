<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class ProtefolioController extends Controller
{
    public function portfolioCreate()
    {
        return view('backend.pages.protfolio.create');
    }

    public function portfolioIndex()
    {
        $portfolioes=Portfolio::get();
        return view('backend.pages.protfolio.index',compact('portfolioes'));
    }

    public function portfolioStore(Request $request)
    {
        $image =  $request->file('image');
        //return $request;

        foreach ($image as $multi_img) {

            $name_gen = hexdec(uniqid()) . '.' . $multi_img->getClientOriginalExtension();
            Image::make($multi_img)->resize(300, 300)->save('image/portfolio/' . $name_gen);

            $last_img = 'image/portfolio/' . $name_gen;

            Portfolio::insert([

                'image' => $last_img,
                'cetagory' => $request->cetagory,
                'created_at' => Carbon::now()
            ]);
        } // end of the foreach



        return Redirect()->route('admin.backend.portfolioIndex');
    }

    public function portfolioDelete($id)
    {
        $image = Portfolio::where('id', $id)->first();
        $old_image = $image->image;
        unlink($old_image);

        $slider=Portfolio::find($id);
        $slider->delete();

        return redirect()->back();
    }
}
