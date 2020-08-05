@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Diploma in Airport Ground Handling</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/training-hero.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Diploma in Airport Ground Handling</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Diploma in Airport Ground Handling</a> </li>
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
                                <p style="text-align: justify;"><strong>DIPLOMA IN AIRPORT GROUND HANDLING:</strong></p>
                                <p style="text-align: justify;">
                                    Diploma in Airport Ground Handling is for those individuals who are interested in building their career as a ground crew and work in reputed
                                    airports around the world. This course is designed not only to familiarize the students with the duties and responsibilities of a ground crew
                                    but also to prepare them for their work life through practicals on topics like fire and rescue. Regular assessments conducted in the duration 
                                    of the course to access the potential of the students will help build course plans for the improvement of the students in both theory and practical
                                    modules. 

                                    </p>
                                    <strong>WHY DIPLOMA IN AIRPORT GROUND HANDLING</strong>
                                    <p>Aviation is one of the rapidly growing industries around the world. Which more and more airports being built,
                                        the global demand for manpower to handle various operations related to aviation is also on rise. Airport 
                                        Ground Handling is for those who are interested in learning how the airport operates including but not
                                        limited to customer handling, cargo and baggage, ramp duty etc.
                                        Having a diploma in air cabin crew will physically and mentally prepare you for a career as a ground crew
                                        and the knowledge that you gain from this course can increase your chances of being hired when applying
                                        for the position in different airports around the world.</p>

                                    <p style="text-align: justify;"><strong>ELIGIBILITY:</strong></p>
                                    <p style="text-align: justify;"><strong>Age:</strong> 17 to 28 years.</p>
                                    <p style="text-align: justify;"><strong>Qualifications: </strong>High school/ +2 graduate, No visible tattoos, 
                                        Good communication skills and amiable personality</p>
                                    
                                    
                                    <p style="text-align: justify;"><strong>CAREER OPPORTUNITIES:</strong></p>
                                     <ul style="text-align: justify;">
                                        <li>Ground crew in major airports around the world</li>
                                     </ul>

                                     <p style="text-align: justify;"><strong>COURSE DURATION:</strong></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">Six months + internship</span></p>

                                     <p style="text-align: justify;"><strong>COURSE STRUCTURE:</strong></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">201. Health and Safety Within Aviation</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">202. Aviation Security</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">203. Aviation Communication</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">204. Airport Check In Services</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">205. Aircraft Boarding and Arrival Services</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">206. Airport Baggage Processing</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">207. Loading and Unloading of Aircraft</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">208. Airport Baggage facilities</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">209. Aviation Passengers with special requirements</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">210. Aircraft Load Instructions Reports</span></p>

                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">Personality development + Grooming + Swimming + Practicals + Internship</span></p>     
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
