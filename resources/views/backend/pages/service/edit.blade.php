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
                    <form action="{{ route('admin.service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row" >
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title </label>
                                    <input type="text" name="title" class="form-control" 
                                        value="{{ $service->title }}">
                
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Status </label>
                                    <select name="status" class="form-control">
                                        <option value="0">Select Status</option>
                                        <option {{ $service->status=='0' ? 'selected':''}} value="0">Inaction</option>
                                        <option {{ $service->status=='1' ? 'selected':''}} value="1">Action</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Description</label>
                            <textarea class="form-control"  rows="3" name="description">
                                {{ $service->description }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="file" value="{{ $service->image }}" name="image" class="form-control-file" >
                                </div>
                                <div class="col-6">
                                    <img class="m-2" src="{{ asset($service->image) }}" style="height:150px; width:300px;" >
                                </div>
                            </div>
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
