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
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Facebook </label>
                                    <input type="text" name="facebook" class="form-control" value=""
                                        placeholder="Phone Number">
    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Twitter  </label>
                                    <input type="text" name="twitter" class="form-control" value=""
                                        placeholder="Phone Number">
    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Instragram </label>
                                    <input type="text" name="instragram" class="form-control" value=""
                                        placeholder="Email ">
    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Skype  </label>
                                    <input type="text" name="skype" class="form-control" value=""
                                        placeholder="Email ">
    
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Linkedin </label>
                            <input type="text" name="linkedin" class="form-control" value=""
                                >
    
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
