@extends('layouts.front')

@section('title')
<title>{{ config('app.name') }} | Learning Facilities</title>
@endsection

@section('content')
<section id="page-title" data-parallax-image="{{ asset('public/img/learning-hero.jpg') }}"
    style="background-position: center;">
    <div class="container">
        <div class="page-title">
            <h1>Learning Facilities at NAAT</h1>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ asset('/') }}">Home</a> </li>
                <li class="active"><a href="#">Learning Facilities</a> </li>
            </ul>
        </div>
    </div>
</section>

<section class="background-white">
    <div class="container">
        <h4>Page under construction.</h4>
    </div>
</section>
@endsection