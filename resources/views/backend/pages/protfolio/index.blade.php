@extends('backend.layouts.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
    <div class="col-lg-12 p-4">
        <div class="card card-default">
            <div class="card-header justify-content-between">
                <h4>Home Contact </h4>
                <div class="">
                    <a href="{{ route('admin.backend.portfolioCreate') }}"> <button class="btn btn-info">Add Portfolio Image</button>  </a>
                </div>
            </div>
            <div class="card-body">
                <table id="contacttable" class="table table-striped " style="width:100%">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Categories</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolioes as $key=> $portfolio)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img src="{{ asset($portfolio->image) }}" style="height:100px; width:100px;" ></td>
                                <td>
                                    @if ($portfolio->cetagory=='1')
                                        AC Ambulance
                                    @elseif ($portfolio->cetagory=='2')
                                        Non-AC Ambulance
                                    @else
                                        Freezer Van Ambulance
                                    @endif
                                </td>
                                <td>
                                    {{-- <a href="{{ route('admin.backend.portfolioCreate',$portfolio->id) }}" class="btn btn-sm btn-info">Edit</a> --}}

                                    <a href="{{ route('admin.backend.portfolioDelete',$portfolio->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-sm btn-danger">Delete</a>
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
    $('#contacttable').DataTable();
} );
@endsection
