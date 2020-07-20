@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | Online Applications</title>
@endsection

@section('styles')
    <link href="{{ asset('public/back/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('online_applications') }}">Online Applications</a>
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
                            <h4 class="title">List of all Online Applications</h4>
                        </div>
                        <div class="content table-responsive">
                            <table id="online_application" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>telephone</th>
                                    <th>Location</th>
                                    <th>Course</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($applications as $application)
                                    <tr>
                                        <td @if($application->status) style="border-left:5px solid #02d502" @endif>{{ $loop->iteration }}</td>
                                        <td> {{ $application->name }} </td>
                                        <td> {{ $application->email }} </td>
                                        <td> {{ $application->mobile }} </td>
                                        <td> {{ $application->location }} </td>
                                        <td> {{ $application->course }} </td>
                                        <td> {{ $application->dob }} </td>
                                        <td> {{ $application->gender }} </td>
                                        <td> {{ date('Y M d (l)',strtotime($application->created_at)) }} </td>
                                        <td>
                                            @if( $application->status )
                                                <form method="POST" action="{{ route('toggle.online_application_status', $application->id) }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-warning btn-fill btn-sm">Mark as unfollowed</button>
                                                </form>
                                            @else
                                                <a data-toggle="modal" data-target="#followOnlineApplicationModal" data-id="{{ $application->id }}" data-name="{{ $application->name }}" data-course="{{ $application->course }}" class="btn btn-success btn-fill btn-sm">Mark as followed</a>
                                            @endif

                                            <form method="POST" action="{{ route('delete.online_application', $application->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <a data-toggle="modal" data-target="#applicationDetailModal" data-application="{{ $application }}" 
                                                data-date="{{ date('Y M d (l)',strtotime($application->created_at)) }}"
                                                data-updateddate="{{ date('Y M d (l)',strtotime($application->updated_at)) }}"
                                                class="btn btn-primary btn-fill btn-sm m-t10">Detail</a>
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

    <div class="modal fade" id="followOnlineApplicationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Follow Online Application <b id="name"></b> for <b id="course"></b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="followOnlineApplication" method="POST" action="">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Any Remark</label>
                            <textarea name="remark" class="form-control" rows="5" placeholder="Any remarks (if available)" style="resize:none;"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-fill" form="followOnlineApplication">Update</button>
                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="applicationDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Application Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Name: </b> <span id="name"></span></p>
                    <p><b>Email: </b> <span id="email"></span></p>
                    <p><b>Mobile: </b> <span id="mobile"></span>    <b>Telephone: </b> <span id="telephone"></span></p>
                    <p><b>DOB: </b> <span id="dob"></span>    <b>Gender: </b> <span id="gender"></span>    <b>Height: </b> <span id="height"></span> cm</p>
                    <p><b>Location: </b> <span id="location"></span></p>
                    <p><b>Message: </b></p>
                    <p><span id="message"></span></p>
                    <p><b>Submitted date: </b> <span id="date"></span></p>
                    <hr>
                    <p><b>Status: </b> <span id="status"></span></p>
                    <p><b>Followed by: </b> <span id="followedBy"></span></p>
                    <p><b>Remark: </b></p>
                    <p><span id="remark"></span></p>
                    <p><b>Updated date: </b> <span id="updatedDate"></span></p>
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
            $('#online_application').DataTable({
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

            $('ul.nav>li:nth-child(6)').addClass('active');

            $('#followOnlineApplicationModal').on('show.bs.modal', function(e) {
                //get data-id attribute of the clicked element
                var id = $(e.relatedTarget).data('id');
                var name = $(e.relatedTarget).data('name');
                var course = $(e.relatedTarget).data('course');

                //populate the textbox
                var url = '{{ route('toggle.online_application_status', 'id') }}';
                url = url.replace('id', id);
                $(e.currentTarget).find('#name').text(name);
                $(e.currentTarget).find('#course').text(course);
                $(e.currentTarget).find('form').attr('action', url);
            });

            $('#applicationDetailModal').on('show.bs.modal', function(e) {
                //get data-id attribute of the clicked element
                var application = $(e.relatedTarget).data('application');
                var date = $(e.relatedTarget).data('date');
                var updatedDate = $(e.relatedTarget).data('updateddate');

                //populate the textbox
                $(e.currentTarget).find('#name').text(application.name);
                $(e.currentTarget).find('#email').text(application.email);
                $(e.currentTarget).find('#mobile').text(application.mobile);
                $(e.currentTarget).find('#telephone').text(application.telephone);
                $(e.currentTarget).find('#dob').text(application.dob);
                $(e.currentTarget).find('#gender').text(application.gender);
                $(e.currentTarget).find('#height').text(application.height);
                $(e.currentTarget).find('#location').text(application.location);
                $(e.currentTarget).find('#message').text(application.message);
                $(e.currentTarget).find('#remark').text(application.remark);
                if(application.follower){
                    $(e.currentTarget).find('#followedBy').text(application.follower.name);
                }
                if(application.status){
                    $(e.currentTarget).find('#status').text('Followed');
                }else{
                    $(e.currentTarget).find('#status').text('Unollowed');
                }
                $(e.currentTarget).find('#date').text(date);
                $(e.currentTarget).find('#updatedDate').text(updatedDate);
            });
        });
    </script>
@endsection
