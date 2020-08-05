@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Airport Ramp Services</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/training-hero.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Airport Ramp Services</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Airport Ramp Services</a> </li>
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
                                <p style="text-align: justify;"><strong>AIRPORT RAMP SERVICES:</strong></p>
                                <p style="text-align: justify;">
                                    The aircraft servicing and ground handling basics you need to start a career on the ramp. Ramp handling services ensure the efficient
                                     turnaround of aircraft so that flights stay on schedule. This course offers an introduction to ramp services
                                      as well as the ground handling standards and safety requirements you need to know to work safely on the
                                       ramp. Whether you are new to the industry or a recent recruit, this course provides a solid foundation for
                                        further professional development in the field of ground operations.
                                    </p>

                                     <p style="text-align: justify;"><strong>COURSE DURATION:</strong></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">44 hours</span></p>

                                     <p style="text-align: justify;"><strong>WHAT YOU WILL LEARN:</strong></p>
                                     <p style="text-align: left;"><span style="font-size: 12.16px;">Upon completing this course you will have the skills to:</span></p>

                                     <li>The ground operations working environment </span></li>
                                     {{-- <li>Learn about passenger and baggage check-in and boarding procedures, including 	passengers with special needs</span></li> --}}
                                     <li>Standard ramp operations terminology</span></li>
                                     <li>The departments of an airport and how they work together</span></li>
                                     <li>Basic safety and security for efficient operations</span></li>
                                     <li>Procedures for key aircraft ground servicing tasks</span></li>
                                     <li>IATA Airport Handling Manual and IATA Ground Operations Manual standards</span></li>
                                     {{-- <li>Add value to existing and future employers looking to hire and retain knowledgeable and high performing personnel</span></li> --}}
                                    <br>
                                     <p style="text-align: justify;"><strong>COURSE CONTENT:</strong></p>
                                     <li>Introduction to the airside environment and airport ramp services </span></li>
                                     <li>Aircraft characteristics and turnaround plan 	</span></li>
                                     <li>Cleaning, catering and other services</span></li>
                                     <li>Ground service equipment </span></li>
                                     <li>Standard operating procedures</span></li>
                                     <li>Airside safety 	</span></li>
                                     <li>Ramp security awareness  </span></li>
                                     <li>Future developments in the sector of ramp services 	</span></li>
                                    <br>
                                     <p style="text-align: justify;"><strong>WHO SHOULD ATTEND:</strong></p>
                                     <p style="text-align: left;"><span style="font-size: 12.16px;">This course is recommended for:</span></p>
                                     <li>Anyone interested in pursuing a career with an airline or ground service provider </span></li>
                                     <li>Recently recruited airline, airport and ground handling staff</span></li>
                                     {{-- <p style="text-align: justify;"><span style="font-size: 12.16px;">Civil Aviation 	Authorities’ staff providing passenger services</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">Anyone wishing to start a career as a 	Passenger Service Agent</span></p> --}}
                                    <br> 
                                     <p style="text-align: justify;"><strong>CERTIFICATE AWARDED:</strong></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">An IATA Certificate is awarded to participants successfully passing the final exam.</span></p>
                                     <br><br>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">For more information about the course please visit the official website of IATA at: </span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;"><a href="https://www.iata.org/en/training/courses/airport-ramp-services/267/en/">https://www.iata.org/en/training/courses/airport-ramp-services/267/en/</a></span></p>
                                     
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
