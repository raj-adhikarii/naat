@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | Edit Testimonial</title>
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="#">Edit Testimonials</a>
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
                            <h4 class="title">Edit Testimonial by "<b>{{ $testimonial->name }}</b>"</h4>
                        </div>
                        <div class="content">
                            {{ Form::model($testimonial, ['method' => 'patch', 'route' => ['testimonials.update', $testimonial->id], 'files' => true]) }}
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        {{ Form::label('name', 'Name') }}
                                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'required']) }}
                                    </div>
                                    
                                    <div class="col-md-6">
                                        {{ Form::label('designation', 'Designation') }}
                                        {{ Form::text('designation', null, ['class' => 'form-control', 'placeholder' => 'Enter Designation', 'required']) }}
                                    </div>

                                    <div class="col-md-12">
                                        {{ Form::label('testimony', 'Testimony') }}
                                        {{ Form::textarea('testimony', null, ['class' => 'form-control', 'id' => 'editor', 'placeholder' => 'Enter Testimony', 'rows' => '10', 'cols' => '80', 'required']) }}      
                                    </div>

                                    <div class="col-md-6">
                                        {{ Form::label('avatar', 'Avatar') }}
                                        <input type="file" name="avatar" class="form-control-file" id="avatar" onchange="readURL(this)">
                                        @if ($errors->has('avatar'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('avatar') }}</strong><br>
                                            </span>
                                        @endif
                                
                                        <button type="submit" class="btn btn-primary btn-fill m-t60">Update</button>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <label>Avatar Preview</label><br>
                                        <img id="img" src="{{ asset('public/img/testimonials') }}/{{ $testimonial->avatar}}" alt="user avatar"
                                            style="max-height:130px; width:auto; object-fit: cover;">
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
            $('ul.nav>li:nth-child(5)').addClass('active');
        });

        function readURL(input) {
            var url = input.value;
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }else{
                $('#img').attr('src', 'https://www.riobeauty.co.uk/images/product_image_not_found_thumb.gif');
            }
        }
    </script>
@endsection
