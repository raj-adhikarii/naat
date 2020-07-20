@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Why NAAT?</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/Aviation1.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Why NAAT?</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Why NAAT?</a> </li>
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
                                        <img alt="" src="{{ asset('public/img/why.jpg') }}">
                                    </a>
                                </div>
                                <br>
                                <p style="  text-align: justify;">We help people transform their lives by helping them to tap into their potential to develop the skills they need to get their first job, progress on to higher level and become globally mobile. Our courses are recognized in 82 countries and we work towards solving local skill shortage problem by creating the work force of tomorrow. To solve the skill shortage problem globally, we provide internationally recognized vocational courses that will develop skill set in the area of your desire after which you will be able to find a job placement in the relevant industry through the network of our partner organization.</p>
                                <p style="text-align: justify;"><strong>Affliation:</strong></p>
                                <p style="text-align: justify;">We are affiliated to City &amp; Guilds, a training organization which is recognized in over 82 countries providing job placement assistance in relevant industry.</p>
                                <p style="text-align: justify;"><strong>Credit transfer:</strong></p>
                                <p style="text-align: justify;">After you finish your course with us, you get an option to study further course abroad.</p>
                                <p style="text-align: justify;"><strong>Our Values:</strong></p>
                                <p style="text-align: justify;">At NAAT, we give a great emphasis on excellence in education which we achieve through our belief and practice of continuous endeavourness.</p>
                                <p style="text-align: justify;"><strong>What you get:</strong></p>
                                <ul>
                                    <li style="text-align: justify;">High demand</li>
                                    <li style="text-align: justify;">High paid skills</li>
                                    <li style="text-align: justify;">Recognised in 82 countries</li>
                                    <li style="text-align: justify;">Job placement assistance</li>
                                    <li style="text-align: justify;">Option to credit transfer to foreign country</li>
                                    <li style="text-align: justify;">Great team behind you</li>
                                </ul>
                                <p style="text-align: justify;"></p>
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
                                <li class="services-active"> <a href="{{ route('about') }}">Why NAAT? </a> </li>
                                <li> <a href="{{ route('about.who') }}">Who are we?</a> </li>
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
