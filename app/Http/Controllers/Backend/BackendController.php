<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BackendController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function SocialMedia()
    {
        $socialLink=SocialLink::first();
        return view('backend.pages.site_setting.social_media',compact('socialLink'));
    }

    public function SocialLink(Request $request,$id)
    {
        $data=array();
        $data['facebook']=$request->facebook;
        $data['twitter']=$request->twitter;
        $data['skype']=$request->skype;
        $data['linkedin']=$request->linkedin;
        $data['instragram']=$request->instragram;
        SocialLink::where('id',$id)->update($data);
        return redirect()->back()->with('success','Social link Is update Successfully');
    }

    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success','User Logout');
    }

    public function Cpassword(){
        return view('backend.pages.site_setting.change_password');
    }

    public function UpdatePassword(Request $request){

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);
        
        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');

        }else{
            return redirect()->back()->with('error','Current Password IS Invalid');
        }

    }

    public function Cprofile(){
        if(Auth::user()){
            $user = User::find(Auth::user()->id);
            if($user){
                return view('backend.pages.site_setting.update_profile',compact('user'));
            }
        }
    }

    public function UpdateProfile(Request $request){
        $user = User::find(Auth::user()->id);
        if($user){
            $user->name = $request['name'];
            $user->email = $request['email'];

            $user->save();
            return Redirect()->back()->with('success','User Profile Is update Successfully');

        }else{
            return Redirect()->back();
        }
    }

    public function Admin()
    {
        return redirect()->route('login');
    }

}
