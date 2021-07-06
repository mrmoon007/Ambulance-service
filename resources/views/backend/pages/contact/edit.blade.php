@extends('backend.layouts.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
    <div class="content">
        <div class="col-lg-12 p-4">
            <div class="card card-default">
                <div class="card-header justify-content-between">
                    <h4>Home Contact </h4>
                    <div class="">
                        {{-- <a href="{{ route('admin.slider.create') }}"> <button class="btn btn-info">Add Slider</button>  </a> --}}
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.contact.update',$contactData->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Phone 1 </label>
                                    <input type="text" name="phone_1" class="form-control" value="{{ $contactData->phone_1 }}"
                                        placeholder="Phone Number">
    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Phone 2 </label>
                                    <input type="text" name="phone_2" class="form-control" value="{{ $contactData->phone_2 }}"
                                        placeholder="Phone Number">
    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email 1 </label>
                                    <input type="text" name="email_1" class="form-control" value="{{ $contactData->email_1 }}"
                                        placeholder="Email ">
    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email 2 </label>
                                    <input type="text" name="email_2" class="form-control" value="{{ $contactData->email_2 }}"
                                        placeholder="Email ">
    
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Address  </label>
                                    <input type="text" name="address" class="form-control" value="{{ $contactData->address }}"
                                        placeholder="Address">
    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">State</label>
                                    <input type="text" name="state" class="form-control" value="{{ $contactData->state }}"
                                        placeholder="State">
    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Country </label>
                            <input type="text" name="country" class="form-control" value="{{ $contactData->country }}"
                                placeholder="Country">
    
                        </div>
                        <div class="form-footer pt-4 pt-5 mt-4 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Save</button>
    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
