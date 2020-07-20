@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | Events</title>
@endsection

@section('styles')
    <link href="{{ asset('public/back/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('events.index') }}">Events</a>
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
                            <h4 class="title">List of all Events <a href="{{ route('events.create') }}" class="pull-right btn btn-sm btn-primary btn-fill">Add Event</a></h4>
                        </div>
                        <div class="content table-responsive">
                            <table id="event" class="table table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Thumbnail</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                        <tr>
                                            <td> {{$loop->iteration}}</td>
                                            <td>
                                                <img src="{{ asset('public/img/events/'.$event->thumbnail) }}" style="width:150px; height:100px; object-fit:cover;">
                                            </td>
                                            <td>{{$event->title}}</td>
                                            <td>{!! substr($event->description, 0, 100) . '...' !!}</td>
                                            <td>{{ date('Y M d (l)',strtotime($event->created_at)) }}</td>
                                            <td>{{ date('Y M d (l)',strtotime($event->updated_at))}}</td>
                                            <td style="width: 115px;">
                                                <a href="{{ route('detailEvents', $event->slug) }}" class="btn btn-primary btn-fill btn-sm" target="_blank">
                                                    Detail</a>
                                                <a href="{{ route('events.edit', $event->slug) }}" class="btn btn-warning btn-fill btn-sm">
                                                    Edit</a>
                                                <form method="POST" action="{{ route('events.destroy', $event->slug) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-fill btn-sm m-t10" onclick="return confirm('Are you sure you want to delete this item?');">Delete this event</button>
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
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('public/back/js/dataTables.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#event').DataTable({
	            dom: '<"html5buttons"B>lTfgitp',
                language: {
                    searchPlaceholder: "Search..."
                },
	            buttons: [
	                {extend: 'copy'},
	                {extend: 'csv', title: 'All Events'},
	                {extend: 'excel', title: 'All Events'},
	                {extend: 'pdf', title: 'All Events'},

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

            $('ul.nav>li:nth-child(2)').addClass('active');
        });
    </script>
@endsection
