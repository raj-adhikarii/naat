@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | Testimonials</title>
@endsection

@section('styles')
    <link href="{{ asset('public/back/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('testimonials.index') }}">Testimonials</a>
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
                            <h4 class="title">List of all Testimonials <a href="{{ route('testimonials.create') }}" class="pull-right btn btn-sm btn-primary btn-fill">Add Testimonial</a></h4>
                        </div>
                        <div class="content table-responsive">
                            <table id="testimonial" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Testimony</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($testimonials as $testimonial)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('public/img/testimonials') }}/{{ $testimonial->avatar }}" alt="testimonial user profile" style="width: 150px; height: 100px; object-fit: cover;"></td>
                                            <td>{{ $testimonial->name }}</td>
                                            <td>{{ $testimonial->designation }}</td>
                                            <td>{!! substr($testimonial->testimony, 0, 100).'...' !!}</td>
                                            <td>{{ date('Y M d (l)',strtotime($testimonial->created_at)) }}</td>
                                            <td style="width: 115px;">
                                                {{ Form::open(['method' => 'delete', 'route' => ['testimonials.destroy', $testimonial->id]]) }}
                                                    <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-warning btn-fill btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-fill btn-sm" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
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
            $('#testimonial').DataTable({
	            dom: '<"html5buttons"B>lTfgitp',
                language: {
                    searchPlaceholder: "Search..."
                },
	            buttons: [
	                {extend: 'copy'},
	                {extend: 'csv', title: 'All Testimonials'},
	                {extend: 'excel', title: 'All Testimonials'},
	                {extend: 'pdf', title: 'All Testimonials'},

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

            $('ul.nav>li:nth-child(5)').addClass('active');
        });
    </script>
@endsection
