@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Mission and Vision</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/Aviation1.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Mission and Vision</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Mission and Vision</a> </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-8 col-sm-8 col-12">
                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="{{ asset('public/img/mission.jpg') }}">
                                    </a>
                                </div>
                                <br>
                                <p><strong>MISSION</strong></p>
                                <p>To provide reliable and quality training in the area of aviation as per the requirement of global industry.</p>
                                <p><strong>VISION</strong></p>
                                <p>Northern Light Academy of Aviation and Technology Pvt. Ltd. (NAAT) seeks to create and sustain an aviation and education system that fosters individual aviation career as well as regional aviation viability and growth.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-12">
                    <div class="services-single-left-box">
                        <div class="services-single-left-heading">
                            <h4>About Us</h4>
                        </div>
                        <br>
                        <div class="services-single-menu mt-30">
                            <ul class="list list-arrow-icons">
                                <li> <a href="{{ route('about') }}">Why NAAT? </a> </li>
                                <li> <a href="{{ route('about.who') }}">Who are we?</a> </li>
                                <li> <a href="{{ route('about.our_team') }}">Our Team</a> </li>
                                <li class="services-active"> <a href="{{ route('about.mission') }}">Mission and Vision</a> </li>
                                <li> <a href="{{ route('about.message') }}">Message from Managing Director</a> </li>
                            </ul>
                        </div>
                        <br>
                        <div class="services-single-left-heading mt-40">
                            <h4>Need Help ?</h4>
                        </div>
                        <ul class="primary-list mt-30" style="list-style: none">
                            <li><i class="fa fa-map-marker"></i>New Baneshwor Panchakumari Marga</li>
                            <li><i class="fa fa-phone"></i>+977 1 4488991, 4489868</li>
                            <li><i class="fa fa-envelope-open"></i>info@naat147.com</li>
                            <li><i class="fa fa-clock"></i>10 am - 6 pm (Sunday - Friday)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
