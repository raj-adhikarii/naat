@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | Contact Queries</title>
@endsection

@section('styles')
    <link href="{{ asset('public/back/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('contactqueries.index') }}">Contact Queries</a>
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
                            <h4 class="title">List of all Contact Queries</h4>
                        </div>
                        <div class="content table-responsive">
                            <table id="contact" class="table table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>followed</th>
                                        <th>Followed By</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contactqueries as $contactquery)
                                        <tr>
                                            <td @if($contactquery->followed) style="border-left:5px solid #02d502" @endif>{{ $loop->iteration }}</td>
                                            <td>{{ $contactquery->name }}</td>
                                            <td>{{ $contactquery->email }}</td>
                                            <td>{{ $contactquery->subject }}</td>
                                            <td>{{ substr($contactquery->message, 0, 100) . '...' }}</td>
                                            <td>@if($contactquery->followed)True @else False @endif</td>
                                            <td>@if(!is_null($contactquery->follower)) {{ $contactquery->follower->name }} @endif</td>
                                            <td>{{ date('Y M d',strtotime($contactquery->created_at)) }}</td>
                                            <td>{{ date('Y M d',strtotime($contactquery->updated_at)) }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('contactqueries.update', $contactquery->id) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    @if($contactquery->followed)
                                                        <button type="submit" class="btn btn-warning btn-fill btn-sm">Mark as unfollowed</button>
                                                    @else 
                                                        <button type="submit" class="btn btn-success btn-fill btn-sm">Mark as followed</button>
                                                    @endif
                                                </form>
                                                <form method="POST" action="{{ route('contactqueries.destroy', $contactquery->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a data-toggle="modal" data-target="#contactDetailModal" data-contact="{{ $contactquery }}" data-date="{{ date('Y M d',strtotime($contactquery->created_at)) }}" class="btn btn-fill btn-sm btn-primary m-t10">Detail</a>
                                                    <button type="submit" class="btn btn-danger btn-fill btn-sm m-t10" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
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

    <div class="modal fade" id="contactDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contact Query Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Name: </b> <span id="name"></span></p>
                    <p><b>Email: </b> <span id="email"></span></p><p>
                    <p><b>Subject: </b> <span id="subject"></span></p>
                    <p><b>Message: </b></p>
                    <p><span id="message"></span></p>
                    <p><b>Submitted date: </b> <span id="date"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('public/back/js/dataTables.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#contact').DataTable({
	            dom: '<"html5buttons"B>lTfgitp',
                language: {
                    searchPlaceholder: "Search..."
                },
	            buttons: [
	                {extend: 'copy'},
	                {extend: 'csv', title: 'All Contact Queries'},
	                {extend: 'excel', title: 'All Contact Queries'},
	                {extend: 'pdf', title: 'All Contact Queries'},

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
            
            $('#contactDetailModal').on('show.bs.modal', function(e) {
                //get data-id attribute of the clicked element
                var contact = $(e.relatedTarget).data('contact');
                var date = $(e.relatedTarget).data('date');

                //populate the textbox
                $(e.currentTarget).find('#name').text(contact.name);
                $(e.currentTarget).find('#email').text(contact.email);
                $(e.currentTarget).find('#subject').text(contact.subject);
                $(e.currentTarget).find('#message').text(contact.message);
                $(e.currentTarget).find('#date').text(date);
            });

            $('ul.nav>li:nth-child(4)').addClass('active');
        });
    </script>
@endsection
