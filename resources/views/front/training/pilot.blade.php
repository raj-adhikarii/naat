@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Pilot Training</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/training-hero.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Pilot Training</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Pilot Training</a> </li>
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
                                        <img alt="" src="{{ asset('public/img/n3.jpg') }}">
                                    </a>
                                </div>
                                <br>
                                <p>We offer aspiring pilots an opportunity to find a rewarding career in aviation as an airline pilot. We represent various reputed flight schools across the globe and are designated as authorized country representatives for those flight schools.<br><br>Popular destination for pilot training includes South Africa, USA, Australia and Philippines where you will learn all the skills to meet the industry standards in state of the art facility.<br><br><strong> Why commercial pilot as a career?</strong> <br><br>Apart from all the glamour that seems from outside in aviation, a career as a pilot is also rewarding and satisfying from the inside. If flying is something you really want to do in life then you will surely enjoy your career becoming a pilot.<br><br>As places are getting inter-connected by air and aviation industry is ever growing, new opportunities for pilots are are ever on the rise in Nepal and global market. So if you are thinking to pursue a career as an airline pilot, we assure you, its worth all your effort and dedication.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-12">
                    <div class="services-single-left-box">
                        <div class="services-single-left-heading">
                            <h4>Courses</h4>
                        </div>
                        <br>
                        <div class="services-single-menu mt-30">
                            <ul class="list list-arrow-icons">
                                <div class="accordion accordion-simple">
                                    <div class="ac-item">
                                        <h5 class="ac-title">
                                            City and Guilds Courses
                                        </h5>
                                        <div class="ac-content">
                                            <ul class="sub-list">
                                                <li><a href="{{ route('diplomacrew') }}">Diploma in Air Cabin Crew</a></li>
                                                <li><a href="{{ route('groundhandling') }}">Diploma in Airport Ground Handling</a></li>
                                                <li><a href="{{ route('internationaltourism') }}">Level 2 Diploma in International Tourism</a></li>
                                                <li><a href="{{ route('advancedinternationaltourism') }}">Level 3 Advanced Diploma in International Tourism</a></li>
                                                <li><a href="{{ route('aircraftmaintenance') }}">Consultation on Aircraft Maintenance Engineering(AME)</a></li>
                                                <li><a href="{{ route('trainingcanada') }}">Counseling On Pilot Training Program For Canada</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ac-item ac-active">
                                        <h5 class="ac-title">
                                            IATA Courses
                                        </h5>
                                        <div class="ac-content">
                                            <ul class="sub-list">
                                                <li><a href="{{ route('groundservices') }}">Passenger Ground Services</a></li>
                                                <li><a href="{{ route ('airportramp') }}">Airport Ramp Services</a></li>
                                                <li><a href="{{ route ('groundoperation')}} ">Ground Operations Management</a></li>
                                                <li><a href="{{ route('airlinecrew') }}">Airline Cabin Crew Training</a></li>
                                                <li><a href="{{ route('regulationinitialcat')}} ">Dangerous Goods Regulations (DGR) Initial Category 3</a></li>
                                                <li><a href="{{ route('regulationrecurrentcat')}} ">Dangerous Goods Regulations (DGR) Recurrent Category 3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ac-item">
                                        <h5 class="ac-title">
                                            EASA Part 66
                                        </h5>
                                        <div class="ac-content">
                                            <ul class="sub-list">
                                                <li><a href="{{ route('easamodular')}} ">Modular course and examination</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ac-item">
                                        <h5 class="ac-title no-icon">
                                            <a href="#">Airlines Corporate Training</a>
                                        </h5>
                                    </div>
                                    <div class="ac-item ac-active">
                                        <h5 class="ac-title">
                                            Consulting Services
                                        </h5>
                                        <div class="ac-content">
                                            <ul class="sub-list">
                                                <li class="services-active"><a href="{{ route('pilot') }}">Pilot Training</a></li>
                                                <li><a href="{{ route('aircraft') }}">Aircraft Maintenance Engineering</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
