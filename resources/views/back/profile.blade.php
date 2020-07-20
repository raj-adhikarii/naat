@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | User Profile</title>
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('profile') }}">User Profile</a>
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
                            <h4 class="title">Update User Profile</h4>
                        </div>
                        <div class="content">
                            {{ Form::open(['method' => 'PUT', 'route' => 'update.password']) }}
                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ Form::label('email', 'Email') }}
                                    {{ Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Enter Email', 'required', 'disabled']) }}
                                </div>

                                <div class="col-md-6">
                                    {{ Form::label('old_password', 'Old Password') }}
                                    {{ Form::password('old_password', ['class' => 'form-control', 'placeholder' => 'Enter Current Password', 'required']) }}
                                </div>

                                <div class="col-md-6">
                                    {{ Form::label('password', 'New Password') }}
                                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter New Password', 'required']) }}
                                </div>

                                <div class="col-md-6">
                                    {{ Form::label('password_confirmation', 'Password Confirmation') }}
                                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password Confirmation', 'required']) }}
                                </div>
                                <div class="col-md-6"></div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-fill m-t30">Change Password</button>
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