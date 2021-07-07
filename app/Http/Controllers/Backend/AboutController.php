<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function editAbout()
    {
        return view('backend.pages.about.edit');
    }

    public function UpdateAbout(Request $request,$id)
    {
        
    }
}
