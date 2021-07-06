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
                    <h4>Home Service </h4>
                    <div class="">
                        <a href="{{ route('admin.service.create') }}"> <button class="btn btn-info">Add Service</button>  </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="servicetable" class="table table-striped " style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $key => $service)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->image }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>{{ $service->status }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-info">Edit</a>
    
                                        {{-- <a href="" onclick="return confirm('Are you sure to delete')" class="btn btn-sm btn-danger">Delete</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
    
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
$(document).ready(function() {
    $('#servicetable').DataTable();
} );
@endsection
