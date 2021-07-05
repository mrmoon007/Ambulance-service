<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $f_slideres= Slider::get();
        $fcontact=Contact::first();
        return view('frontend.pages.index',compact('f_slideres','fcontact'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function portfolio()
    {
        return view('frontend.pages.portfolio');
    }

    public function contact()
    {
        $fcontact=Contact::first();
        return view('frontend.pages.contact',compact('fcontact'));
    }
}
