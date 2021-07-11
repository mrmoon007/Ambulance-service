<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use App\Models\About;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $f_slideres= Slider::where('status','1')->limit(6)->get();
        $fcontact=Contact::first();
        $fabout=About::first();
        $Acportfolio=Portfolio::where('cetagory','1')->orderBy('created_at', 'DESC')->limit(3)->get();
        $nonAcportfolio=Portfolio::where('cetagory','2')->orderBy('created_at', 'DESC')->limit(3)->get();
        $frezportfolio=Portfolio::where('cetagory','3')->orderBy('created_at', 'DESC')->limit(3)->get();
        $rentAcars=Portfolio::where('cetagory','4')->orderBy('created_at', 'DESC')->limit(3)->get();
        $f_services=Service::where('status','1')->limit(3)->get();
        return view('frontend.pages.index',compact('rentAcars','fabout','f_slideres','fcontact','Acportfolio','nonAcportfolio','frezportfolio','f_services',));
    }

    public function about()
    {
        $fabout=About::first();
        return view('frontend.pages.about',compact('fabout'));
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
        $rentAcars=Portfolio::where('cetagory','4')->limit(3)->get();
        return view('frontend.pages.portfolio',compact('rentAcars','Acportfolio','nonAcportfolio','frezportfolio'));
    }

    public function contact()
    {
        $fcontact=Contact::first();
        return view('frontend.pages.contact',compact('fcontact'));
    }
}
