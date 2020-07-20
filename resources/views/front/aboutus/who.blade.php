@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Who are we?</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/Aviation1.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Who are we?</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Who are we?</a> </li>
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
                                        <img alt="" src="{{ asset('public/img/who.jpg') }}">
                                    </a>
                                </div>
                                <br>
                                <strong>ABOUT NAAT</strong>
                                <p>Northern Light Academy of Aviation and Technology (NAAT) is a leading aviation
                                academy in Nepal established with the aim to bridge the gap between prospective job
                                seekers and employers in the field of aviation. In affiliation to City and Guilds UK, we
                                provide a wide range of accredited courses in both aviation and International tourism,
                                some of which are not provided by any other institutions in Nepal.
                                City and Guilds is a leading vocational training institution and its certificate is valid in
                                more than 82 countries worldwide. Having a Diploma certificate from City and Guilds
                                will not only empower you with knowledge to work in the field of your choice in Nepal
                                but will also open up exciting opportunities for you in the country of your choice
                                anywhere in the world.
                                Our diploma courses, designed in accordance with the City and Guilds handbook put
                                special emphasis on practical based learning and continuous improvement assessment to
                                create a more student-centric approach to teaching and learning.
                                You can also choose to further your education in the same field in related universities
                                around the world through credit transfer once you have completed the diploma of your
                                choice from NAAT.
                                </p>
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
                                <li class="services-active"> <a href="{{ route('about.who') }}">Who are we?</a> </li>
                                <li> <a href="{{ route('about.our_team') }}">Our Team</a> </li>
                                <li> <a href="{{ route('about.mission') }}">Mission and Vision</a> </li>
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
