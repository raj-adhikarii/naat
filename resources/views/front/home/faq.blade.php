@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | FAQ</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/Aviation1.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>FAQ</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="{{ route('about') }}">FAQ</a> </li>

                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-text heading-section text-center">
                        <h2>Frequently Asked Question</h2>
                    </div>
                    <div class="accordion toggle fancy radius clean">
                        <div class="ac-item ac-active">
                            <h5 class="ac-title"><i class="fa fa-question-circle"></i>Why to choose NAAT?</h5>
                            <div style="" class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                        </div>
                        <div class="ac-item">
                            <h5 class="ac-title"><i class="fa fa-question-circle"></i>What are the speciality of NAAT?</h5>
                            <div style="display: none;" class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                        </div>
                        <div class="ac-item">
                            <h5 class="ac-title"><i class="fa fa-question-circle"></i>What courses are provided?</h5>
                            <div style="display: none;" class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                        </div>
                        <div class="ac-item">
                            <h5 class="ac-title"><i class="fa fa-question-circle"></i>Is it affordable?</h5>
                            <div style="display: none;" class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-t-40">
            </div>
            <div class="col-lg-12">
                <h4>For more details</h4>
            </div>
            <div class="col-lg-12">
                <a href="{{ route('front.contact') }}" class="btn btn-grad">Contact Us</a>
            </div>

            {{--<div class="row"></div>--}}
            {{--<div class="col-lg-6">--}}
                {{--<h4>For more details</h4>--}}
                {{--<div class="mt-20 left-holder"> <a href="{{ route('front.contact') }}" class="primary-button button-sm" style="color: white;">Contact US</a> </div>--}}
            {{--</div>--}}
        </div>
    </section>
@endsection
