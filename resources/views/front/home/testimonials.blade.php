@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Testimonials</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/testimonials/testimonials.jpg') }}" style="background-position: center;">
        <div class="container">
            <div class="page-title">
                <h1>Testimonials</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li class="active"><a href="#">Testimonials</a> </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="background-white">
        <div class="container">
            <div class="grid-layout grid-3-columns testimonial testimonial-box" data- data-item="grid-item">
                @foreach($testimonials as $testimonial)
                    <div class="grid-item">
                        <div class="testimonial-item" style="height: 350px;">
                            <img src="{{ asset('public/img/testimonials') }}/{{ $testimonial->avatar }}" alt="">
                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; 
                            -webkit-line-clamp: 6; padding-bottom: 0; margin-bottom: 20px;">{{ $testimonial->testimony }}</p>
                            <span>{{ $testimonial->name }}</span>
                            <span>{{ $testimonial->designation }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection