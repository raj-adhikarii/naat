@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | Edit Gallery Album</title>
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('albums.index') }}">Edit Gallery Album</a>
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
                        <h4 class="title">Edit Gallery Album '<b>{{ $album->name }}</b>'</h4>
                    </div>
                    <div class="content">
                        {{ Form::open(['method' => 'put', 'route' => ['albums.update', $album->id]]) }}

                        <div class="form-group row">
                            <div class="col-md-6">
                                {{ Form::label('album', 'Album') }}
                                {{ Form::text('album', $album->name, ['class' => 'form-control', 'placeholder' => 'Enter Album Name']) }}
                            </div>
                            <div class="col-md-12">
                                {{ Form::label('info', 'Album Info') }}
                                {{ Form::textarea('info', $album->info, ['class' => 'form-control', 'placeholder' => 'Enter Album info', 'rows' => '5', 'cols' => '80', 'required']) }}
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-fill m-t60">update</button>
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