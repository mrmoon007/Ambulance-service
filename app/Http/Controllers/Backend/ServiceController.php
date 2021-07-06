<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class ServiceController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::get();
        return view('backend.pages.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $service_image =  $request->file('image');


        $name_gen = hexdec(uniqid()).'.'.$service_image->getClientOriginalExtension();
        Image::make($service_image)->resize(250,250)->save('image/service/'.$name_gen);

        $last_img = 'image/service/'.$name_gen;


        Service::insert([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return view('backend.pages.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service_image =  $request->file('image');
        
        if($request->hasFile('image')){

            $name_gen = hexdec(uniqid()).'.'.$service_image->getClientOriginalExtension();
            Image::make($service_image)->resize(250,250)->save('image/service/'.$name_gen);

            $last_img = 'image/service/'.$name_gen;
        }

        

        $service=Service::find($id)->image;
        if (!empty($service_image)) {
            unlink($service);
        }

        Service::find($id)->update([

            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'image' =>$service_image? $last_img: $service,

        ]);

        return Redirect()->route('admin.service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Service::find($id);
        $old_image = $image->image;
        unlink($old_image);

        $service=Service::find($id);
        $service->delete();

        return redirect()->back();
    }

    public function Status($id)
    {
        $service=Service::find($id)->status;
        $data=array();
        if($service=='1'){
            $data['status']=0;
        }
        else{
            $data['status']=1;
        }

        Service::find($id)->update($data);

        return Redirect()->back();
    }
}
