@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | Stories</title>
@endsection

@section('styles')
    <link href="{{ asset('public/back/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('stories.index') }}">Stories</a>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('fail'))
                        <div class="alert alert-danger">
                            {{ session('fail') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Our Success Stories <a href="{{ route('stories.create') }}" class="pull-right btn btn-sm btn-primary btn-fill">Add Story</a></h4>
                        </div>
                        <div class="content table-responsive">
                            <table id="story" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Organization</th>
                                        <th>Designation</th>
                                        <th>Batch</th>
                                        <th>Facebook</th>
                                        <th>Linkedin</th>
                                        <th>Twitter</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($success_stories as $story)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('public/img/success_stories') }}/{{ $story->avatar }}" alt="user profile" style="width: 120px; height: 90px; object-fit: cover;"></td>
                                            <td>{{ $story->name }}</td>
                                            <td>{{ $story->organization }}</td>
                                            <td>{{ $story->designation }}</td>
                                            <td>{{ $story->batch }}</td>
                                            <td>@if($story->facebook) <a href="{{ $story->facebook }}" target="_blank"> Available</a> @else - @endif</td>
                                            <td>@if($story->linkedin) <a href="{{ $story->linkedin }}" target="_blank"> Available</a> @else - @endif</td>
                                            <td>@if($story->twitter) <a href="{{ $story->twitter }}" target="_blank"> Available</a> @else - @endif</td>
                                            <td>{{ $story->email }}</td>
                                            <td style="width: 115px;">
                                                {{ Form::open(['method' => 'delete', 'route' => ['stories.destroy', $story->id]]) }}
                                                    <a href="{{ route('stories.edit', $story->id) }}" class="btn btn-warning btn-fill btn-sm m-b10">Edit</a>
                                                    <button class="btn btn-danger btn-fill btn-sm m-b10" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                {{ Form::close() }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('public/back/js/dataTables.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#story').DataTable({
	            dom: '<"html5buttons"B>lTfgitp',
                language: {
                    searchPlaceholder: "Search..."
                },
	            buttons: [
	                {extend: 'copy'},
	                {extend: 'csv', title: 'All stories'},
	                {extend: 'excel', title: 'All stories'},
	                {extend: 'pdf', title: 'All stories'},

	                {extend: 'print',
	                 customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
	                	}
	                }
	            ]
	        });

            $('ul.nav>li:nth-child(7)').addClass('active');
        });
    </script>
@endsection
