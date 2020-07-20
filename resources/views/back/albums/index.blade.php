@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | Galleries</title>
@endsection

@section('styles')
    <link href="{{ asset('public/back/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('albums.index') }}">Galleries</a>
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
                            <h4 class="title">List of all Gallery Album <a href="{{ route('albums.create') }}" class="pull-right btn btn-sm btn-primary btn-fill">Add Gallery Album</a></h4>
                        </div>
                        <div class="content table-responsive">
                            <table id="gallery" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Thumbnail</th>
                                    <th>Album name</th>
                                    <th>Album Info</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($albums as $album)
                                        <tr>
                                            <td> {{$loop->iteration}}</td>
                                            <td>
                                                @if($album->images->isNotEmpty())
                                                <img src="{{ asset('public/img/gallery/album_'.$album->id) }}/{{ $album->images->first()->url }}" style="width:150px; height: 100px; object-fit: cover;">
                                                @endif
                                            </td>
                                            <td>{{ $album->name }}</td>
                                            <td>{{ substr($album->info, 0, 150 ).'...' }}</td>
                                            <td>{{ date('Y M d (l)',strtotime($album->created_at)) }}</td>
                                            <td>{{ date('Y M d (l)',strtotime($album->updated_at))}}</td>
                                            <td style="width: 115px;">
                                                <a href="{{ route('album.upload.images', $album->id) }}" class="btn btn-sm btn-fill btn-info m-b10">Update Images</a>
                                                <form method="POST" action="{{ route('albums.destroy',$album->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('albums.edit', $album->id) }}" class="btn btn-sm btn-fill btn-warning">Edit</a>
                                                    @if($album->images->isEmpty())
                                                        <button type="submit" class="btn btn-sm btn-fill btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                    @endif
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
            $('#gallery').DataTable({
	            dom: '<"html5buttons"B>lTfgitp',
                language: {
                    searchPlaceholder: "Search..."
                },
	            buttons: [
	                {extend: 'copy'},
	                {extend: 'csv', title: 'All Galleries'},
	                {extend: 'excel', title: 'All Galleries'},
	                {extend: 'pdf', title: 'All Galleries'},

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

            $('ul.nav>li:nth-child(3)').addClass('active');
        });
    </script>
@endsection
