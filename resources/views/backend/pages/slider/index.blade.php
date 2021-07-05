@extends('backend.layouts.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header justify-content-between">
                <h4>Home Slider </h4>
                <div class="">
                    <a href="{{ route('admin.slider.create') }}"> <button class="btn btn-info">Add Slider</button>  </a>
                </div>
            </div>
            <div class="card-body">
                <table id="slidertable" class="table table-striped " style="width:100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($slideres as $slider)
                            <tr>
                                <td>{{ $slider->title }}</td>
                                <td>
                                    <img src="{{ asset($slider->image) }}" style="height:100px; width:100px;" >
                                </td>
                                <td>
                                    @if ($slider->status==1)
                                        action
                                    @else
                                        inactive
                                    @endif
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{route('admin.slider.destroy',$slider->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Are you sure to delete')" class=" btn btn-danger">Delete</button>
                                    </form>
                                    {{-- <a href="" onclick="return confirm('Are you sure to delete')" class="btn btn-sm btn-danger">Delete</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
$(document).ready(function() {
    $('#slidertable').DataTable();
} );
@endsection
