@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Passenger Ground Services</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/training-hero.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Passenger Ground Services</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Passenger Ground Services</a> </li>
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
                                        <img alt="" src="{{ asset('public/img/cabin.jpg') }}" style="height: 300px; object-fit: cover;">
                                    </a>
                                </div>
                                <br>
                                <p style="text-align: justify;"><strong>PASSENGER GROUND SERVICES:</strong></p>
                                <p style="text-align: justify;">
                                    Learn what it takes to work at one of the airline’s industry most visible airport position 
                                    and obtain the skills you need to provide assistance and related passenger services at the
                                     check-in, gate and concourse of your airport. The course is designed to complement the
                                      training requirements outlined in the IATA Airport Handling Manual (AHM), the IATA Safety
                                       Audit for Ground Operations (ISAGO) and the IATA Passenger Services Conference Resolutions
                                        Manual (PSCRM).
                                    </p>

                                     <p style="text-align: justify;"><strong>COURSE DURATION:</strong></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">45 hours</span></p>

                                     <p style="text-align: justify;"><strong>WHAT YOU WILL LEARN:</strong></p>
                                     <li>Understand how airlines and airports operate in relation to the provision of passenger services </span></li>
                                     <li>Learn about passenger and baggage check-in and boarding procedures, including 	passengers with special needs</span></li>
                                     <li>Interpret the respective regulatory requirements related to passenger and baggage 	transport </span></li>
                                     <li>Understand how computer reservations and departure control systems operate</span></li>
                                     <li>Ensure safe and secure passenger and baggage transport</span></li>
                                     <li>Provide superior customer service in a demanding customer facing environment</span></li>
                                     <li>Learn about the latest technological innovations in passenger services</span></li>
                                     <li>Add value to existing and future employers looking to hire and retain knowledgeable and high performing personnel</span></li>
                                <br>
                                     <p style="text-align: justify;"><strong>COURSE CONTENT:</strong></p>
                                     <li>Introduction to airport and airline operations</span></li>
                                     <li>Computer Reservations (CRS) and Departure Control Systems (DCS) functions</span></li>
                                     <li>Passenger and 	Baggage check-in procedures (airport and off-site)</span></li>
                                     <li>Conditions of 	passenger and baggage carriage, boarding procedures and flight 	close-out messaging</span></li>
                                     <li>Dangerous Goods regulations awareness for passenger service agents</span></li>
                                     <li>Managing passenger interactions 	</span></li>
                                     <li>Aviation security procedures for passenger and baggage transport </span></li>
                                     <li>Enhanced passenger facilitation, latest innovations and career opportunities</span></li>
                                    <br>
                                     <p style="text-align: justify;"><strong>WHO SHOULD ATTEND:</strong></p>
                                     <li>Airline passenger service staff </span></li>
                                     <li>Ground Handling Agents’ passenger services staff </span></li>
                                     <li>Airport operators’ staff providing passenger services</span></li>
                                     <li>Civil Aviation 	Authorities’ staff providing passenger services</span></li>
                                     <li>Anyone wishing to start a career as a 	Passenger Service Agent</span></li>
                                    <br>
                                     <p style="text-align: justify;"><strong>CERTIFICATE AWARDED:</strong></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">An IATA Certificate is awarded to participants successfully passing the final exam.</span></p>
                                     <br><br>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">For more information about the course please visit the official website of IATA at: </span></p>
                                     
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
                                    <div class="ac-item">
                                        <h5 class="ac-title">
                                            Consulting Services
                                        </h5>
                                        <div class="ac-content">
                                            <ul class="sub-list">
                                                <li><a href="{{ route('pilot') }}">Pilot Training</a></li>
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
