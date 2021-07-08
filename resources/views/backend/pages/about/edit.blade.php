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
                    <h4>Home About </h4>
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
                    <form action="{{ route('admin.backend.about.update',$about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Short Title </label>
                                    <input type="text" name="shortTitle" class="form-control" value="{{ $about->shortTitle }}"
                                        >
    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Long Title  </label>
                                    <input type="text" name="longTitle" class="form-control" value="{{ $about->longTitle }}"
                                        >
    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Description</label>
                            <textarea class="form-control"  rows="3" name="description">
                                {{ $about->description }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="file" value="{{ $about->image }}" name="image" class="form-control-file" >
                                </div>
                                <div class="col-6">
                                    <img class="m-2" src="{{ asset($about->image) }}" style="height:150px; width:250px;" >
                                </div>
                            </div>
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
