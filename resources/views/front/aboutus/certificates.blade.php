@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Approval and Certificates</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/certificates/hero.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Approval and Certificates</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Certificates</a> </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="p-b-0">
        <div class="container">
            <div class="grid-layout grid-2-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery" style="padding:20px 0;">
                <div class="grid-item">
                    <h4>PAN Registration</h4>
                    <a class="image-hover-zoom" href="{{ asset('public/img/certificates/pan-registration.png') }}" data-lightbox="gallery-image">
                        <img style="height:550px; width:auto;" src="{{ asset('public/img/certificates/pan-registration.png') }}">
                    </a>
                </div>
                <div class="grid-item">
                    <h4>Company Registration</h4>
                    <a class="image-hover-zoom" href="{{ asset('public/img/certificates/company-registration.png') }}" data-lightbox="gallery-image">
                        <img style="height:550px; width:auto;" src="{{ asset('public/img/certificates/company-registration.png') }}">
                    </a>
                </div>

                <div class="grid-item" style="height:40px;"></div>
                <div class="grid-item" style="height:40px;"></div>

                <div class="grid-item">
                    <h4>Authorization Certificate</h4>
                    <a class="image-hover-zoom" href="{{ asset('public/img/certificates/authorization-certificate1.png') }}"
                        data-lightbox="gallery-image">
                        <img style="height: 550px; width: auto; max-width: 550px; object-fit: contain; object-position: top;" src="{{ asset('public/img/certificates/authorization-certificate1.png') }}">
                    </a>
                </div>
                <div class="grid-item">
                    <h4>Authorization Certificate</h4>
                    <a class="image-hover-zoom" href="{{ asset('public/img/certificates/authorization-certificate2.png') }}"
                        data-lightbox="gallery-image">
                        <img style="height: 550px; width: auto; max-width: 550px; object-fit: contain; object-position: top;" src="{{ asset('public/img/certificates/authorization-certificate2.png') }}">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection