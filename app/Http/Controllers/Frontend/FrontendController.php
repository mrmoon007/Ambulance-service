<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $f_slideres= Slider::where('status','1')->limit(6)->get();
        $fcontact=Contact::first();
        $Acportfolio=Portfolio::where('cetagory','1')->limit(3)->get();
        $nonAcportfolio=Portfolio::where('cetagory','2')->limit(3)->get();
        $frezportfolio=Portfolio::where('cetagory','3')->limit(3)->get();
        $f_services=Service::where('status','1')->limit(3)->get();
        return view('frontend.pages.index',compact('f_slideres','fcontact','Acportfolio','nonAcportfolio','frezportfolio','f_services',));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function services()
    {
        $f_services=Service::where('status','1')->get();
        return view('frontend.pages.services',compact('f_services'));
    }

    public function portfolio()
    {
        $Acportfolio=Portfolio::where('cetagory','1')->get();
        $nonAcportfolio=Portfolio::where('cetagory','2')->get();
        $frezportfolio=Portfolio::where('cetagory','3')->get();
        return view('frontend.pages.portfolio',compact('Acportfolio','nonAcportfolio','frezportfolio'));
    }

    public function contact()
    {
        $fcontact=Contact::first();
        return view('frontend.pages.contact',compact('fcontact'));
    }
}
