@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Contact Us</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/contact-hero.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Contact Us</h1>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="{{ route('front.contact') }}">Contact Us</a> </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Get In Touch</h3>
                    <p>If you have any query please do contact us.</p>
                    <div class="m-t-30">
                        <form class="widget-contact-form" action="{{ route('contact.store') }}" role="form" method="post">
                            @csrf
                                    {{--{{ Form::open(['method' => 'post', 'route' => ['contact.store'], 'class' => 'widget-contact-form', 'role' => 'form']) }}--}}
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="name" class="form-control required name" placeholder="Enter your Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"  placeholder="Enter your Email" required >
                                    {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >--}}

                                @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="subject" class="form-control required" placeholder="Subject..." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="message" rows="5" class="form-control required" placeholder="Enter your Message" required></textarea>
                            </div>
                            <button class="btn btn-grad" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        </form>
                            {{--{{ Form::close() }}--}}
                        </div>
                    </div>
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Address & Map</h3>
                    <div class="row">
                        <div class="col-lg-10">
                            <address>
                                <strong>Northern Light Academy of Aviation and Technology Pvt. Ltd.</strong><br>
                                New Baneshwor, Panchakumari Marga, Kathmandu, Nepal<br>

                                <b>Phone: </b> +977 1 4488991, 4489868<br>
                                <b>Business Hours: </b> 10 am - 6 pm (Sunday - Friday)<br>
                                <b>Email: </b> info@naat147.com
                            </address>
                        </div>
                    </div>

                    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3.exp"></script>

                    <div class="mapouter"><div class="gmap_canvas"><iframe width="526" height="408" id="gmap_canvas" src="https://maps.google.com/maps?q=Northern%20Light%20Academy%20of%20Aviation%20%26%20Technology%20(NAAT)&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:408px;width:526px;}.gmap_canvas {overflow:hidden;background:none!important;height:408px;width:526px;}</style></div>

                </div>
            </div>
        </div>
    </section>
@endsection
