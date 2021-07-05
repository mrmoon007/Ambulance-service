
@extends('backend.layouts.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
    <div class="col-lg-12 p-4">
        <div class="card card-default">
            <div class="card-header justify-content-between">
                <h4>Create Portfolio </h4>
                <div class="">
                    {{-- <a href="{{ route('admin.slider.create') }}"> <button class="btn btn-info">Add Slider</button>  </a> --}}
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.backend.portfolioStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Cetagory </label>
                        <select class="form-control" name="cetagory" >
                            <option value="1">AC Ambulance</option>
                            <option value="2">Non-AC Ambulance</option>
                            <option value="3">Freezer Van Ambulance</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" name="image[]" class="form-control-file" multiple="" >
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Update</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
