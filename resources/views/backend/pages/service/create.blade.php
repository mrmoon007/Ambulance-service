@extends('backend.layouts.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
    <div class="content">
        <div class="col-lg-12 p-4">
            <div class="card card-default ">
                <div class="card-header card-header-border-bottom">
                    <h2>Create Service</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row" >
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title </label>
                                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Slider Title">
                
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Status </label>
                                    <select name="status" class="form-control">
                                        <option value="0">Select Status</option>
                                        <option value="0">Inaction</option>
                                        <option value="1">Action</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Description</label>
                            <textarea class="form-control"  rows="3" name="description">
        
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <input type="file" name="image" class="form-control-file" >
                        </div>
                        <div class="form-footer pt-4 pt-5 mt-4 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection

@section('script')

@endsection
