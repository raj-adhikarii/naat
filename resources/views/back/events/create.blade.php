@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | New Event</title>
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
                            <h4 class="title">Add New Event</h4>
                        </div>
                        <div class="content">
                            {{ Form::open(['method' => 'post', 'route' => 'events.store', 'files' => true]) }}
                                <div class="form-group">
                                    {{ Form::label('title', 'Title') }}
                                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Event Title', 'required']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('slug', 'Slug') }}
                                    {{ Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter Event Slug', 'required']) }}
                                </div>
                                
                                <div class="form-group">
                                    {{ Form::label('description', 'Description') }}
                                    {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'editor', 'rows' => '10', 'cols' => '80', 'placeholder' => 'Enter Event Details', 'required']) }}
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        {{ Form::label('thumbnail', 'Thumbnail') }}
                                        <input type="file" name="thumbnail" class="form-control-file" id="thumbnail" onchange="readURL(this)" required>
                                        @if ($errors->has('thumbnail'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('thumbnail') }}</strong><br>
                                        </span>
                                        @endif
                                        
                                        <button type="submit" class="btn btn-primary btn-fill m-t60">Save</button>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <label>Thumbnail Preview</label><br>
                                        <img id="img" src="https://www.riobeauty.co.uk/images/product_image_not_found_thumb.gif" alt="event thumbnail" style="max-height:130px; width:auto; object-fit: cover;">
                                    </div>                                    
                                </div>

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('public/back/js/plugins/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('ul.nav>li:nth-child(2)').addClass('active');
        });
        CKEDITOR.replace( 'editor' );
    </script>
    <script>
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
