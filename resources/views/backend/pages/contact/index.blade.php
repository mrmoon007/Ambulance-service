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
                <table id="contacttable" class="table table-striped " style="width:100%">
                    <thead>
                        <tr>
                            <th>Phone 1</th>
                            <th>Phone 2</th>
                            <th>Email 1</th>
                            <th>Email 2</th>
                            <th>Address</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->phone_1 }}</td>
                                <td>{{ $contact->phone_2 }}</td>
                                <td>{{ $contact->email_1 }}</td>
                                <td>{{ $contact->email_2 }}</td>
                                <td>{{ $contact->address }}</td>
                                <td>{{ $contact->state }}</td>
                                <td>{{ $contact->country }}</td>
                                <td>
                                    <a href="{{ route('admin.contact.edit',$contact->id) }}" class="btn btn-sm btn-info"><span class="mdi mdi-square-edit-outline"></span></a>

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
    $('#contacttable').DataTable();
} );
@endsection
