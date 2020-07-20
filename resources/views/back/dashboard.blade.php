@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | Dashboard</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('public/back/css/demo.css') }}">
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('admin.home') }}">Dashboard</a>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="pe-7s-display1 text-success"></i>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="numbers">
                                        <p class="card-category">Total Events</p>
                                        <h4 class="card-title"><b>{{$events}}</b></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="pe-7s-id text-info"></i>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="numbers">
                                        <p class="card-category">Online Applications</p>
                                        <h4 class="card-title"><b>{{$users}}</b></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="pe-7s-comment text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="numbers">
                                        <p class="card-category">Web Contact Queries</p>
                                        <h4 class="card-title"><b>{{ $contacts }}</b></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="pe-7s-user text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="numbers">
                                        <p class="card-category">Total Admin Users</p>
                                        <h4 class="card-title"><b>{{$users}}</b></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 150px;">
                <center><h1>Welcome Admin.</h1></center>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

<script src="{{ asset('public/back/js/dataTables.min.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('ul.nav>li:nth-child(1)').addClass('active');
    });
</script>
@endsection
