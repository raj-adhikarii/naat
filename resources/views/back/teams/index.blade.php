@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | Teams</title>
@endsection

@section('styles')
    <link href="{{ asset('public/back/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('teams.index') }}">Teams</a>
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
                            <h4 class="title">List of our team members <a href="{{ route('teams.create') }}" class="pull-right btn btn-sm btn-primary btn-fill">Add Team Member</a></h4>
                        </div>
                        <div class="content table-responsive">
                            <table id="team" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Member Type</th>
                                        <th>Facebook</th>
                                        <th>Linkedin</th>
                                        <th>Twitter</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teams as $team)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('public/img/teams') }}/{{ $team->avatar }}" alt="team user profile" style="width: 120px; height: 90px; object-fit: cover;"></td>
                                            <td>{{ $team->name }}</td>
                                            <td>{{ $team->designation }}</td>
                                            <td>{{ $team->type }}</td>
                                            <td>@if($team->facebook) <a href="{{ $team->facebook }}" target="_blank"> Available</a> @else - @endif</td>
                                            <td>@if($team->linkedin) <a href="{{ $team->linkedin }}" target="_blank"> Available</a> @else - @endif</td>
                                            <td>@if($team->twitter) <a href="{{ $team->twitter }}" target="_blank"> Available</a> @else - @endif</td>
                                            <td>{{ $team->email }}</td>
                                            <td style="width: 115px;">
                                                {{ Form::open(['method' => 'delete', 'route' => ['teams.destroy', $team->id]]) }}
                                                    <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-warning btn-fill btn-sm m-b10">Edit</a>
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
            $('#team').DataTable({
	            dom: '<"html5buttons"B>lTfgitp',
                language: {
                    searchPlaceholder: "Search..."
                },
	            buttons: [
	                {extend: 'copy'},
	                {extend: 'csv', title: 'All teams'},
	                {extend: 'excel', title: 'All teams'},
	                {extend: 'pdf', title: 'All teams'},

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

            $('ul.nav>li:nth-child(8)').addClass('active');
        });
    </script>
@endsection
