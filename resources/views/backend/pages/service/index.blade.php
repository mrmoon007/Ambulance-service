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
                                    <td>
                                        <img src="{{ asset($service->image) }}" style="height:100px; width:100px;" >
                                    </td>
                                    <td>{{ $service->description }}</td>
                                    <td>
                                        @if ($service->status==1)
                                           <span class="badge badge-success">action</span>
                                        @else
                                            <span class="badge badge-danger">inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.service.edit',$service->id) }}" class="btn btn-sm btn-info"><span class="mdi mdi-square-edit-outline"></span></a>
    
                                        <a href="{{ route('admin.service.status',$service->id) }}" class="btn btn-sm btn-success mt-2"><span class="mdi mdi-toggle-switch"></span></a>
                                        <form action="{{route('admin.service.destroy',$service->id)}}" method="POST" >
                                            @method('DELETE')
                                            @csrf
                                            <button onclick="return confirm('Are you sure to delete')" class=" btn btn-sm btn-danger mt-2"><span class="mdi mdi-delete-circle"></span></button>
                                        </form>
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
