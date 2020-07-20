@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | New Gallery Album</title>
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('albums.index') }}">Gallery Album</a>
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
                            <h4 class="title">Create New Gallery Album</h4>
                        </div>
                        <div class="content">
                            {{ Form::open(['method' => 'post', 'route' => 'albums.store']) }}

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        {{ Form::label('album', 'Album') }}
                                        {{ Form::text('album', null, ['class' => 'form-control', 'placeholder' => 'Enter Album Name']) }}
                                    </div>
                                    <div class="col-md-12">
                                        {{ Form::label('info', 'Album Info') }}
                                        {{ Form::textarea('info', null, ['class' => 'form-control', 'placeholder' => 'Enter Album info', 'rows' => '5', 'cols' => '80', 'required']) }}
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-fill m-t60">Save</button>
                                    </div>
                                </div>

                            {{ Form::close()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('ul.nav>li:nth-child(3)').addClass('active');
        });
    </script>
@endsection