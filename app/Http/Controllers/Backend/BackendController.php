<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function SocialMedia()
    {
        return view('backend.pages.site_setting.social_media');
    }

    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success','User Logout');
    }

    

}
