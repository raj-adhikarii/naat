@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Message from Managing Director</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/Aviation1.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Message from Managing Director</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Message from Managing Director</a> </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-8 col-sm-8 col-12">
                    <div itemprop="articleBody">
                        <p><img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('public/img/director.jpg') }}" alt="" width="203" height="246"></p>
                        <p style="text-align: justify;">It is my great pleasure to introduce Northern Light Academy of Aviation and Technology Pvt. Ltd (NAAT), an institute for catering and providing aviation related courses and services to students from Nepal to further abroad studies across the globe. We have an enthusiastic and qualified team that recognizes the essence of quality education.The booming aviation sector around the globe seeks thousands of qualified and skilled human resources; to meet the required qualifications of such candidates, NAAT offers international standard trainings and proper placement in the international market that best suits potential of candidates.</p>
                        <p>I welcome you all to the family of NAAT. &nbsp;</p>
                        <p><strong>Rakesh Sanjel</strong></p>
                        <p><strong>Managing Director</strong></p>
                        <p><strong>Northern Light Academy of Aviation &amp; Technology (NAAT)</strong></p> 	</div>
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
                                <li> <a href="{{ route('about.mission') }}">Mission and Vision</a> </li>
                                <li class="services-active"> <a href="{{ route('about.message') }}">Message from Managing Director</a> </li>
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
