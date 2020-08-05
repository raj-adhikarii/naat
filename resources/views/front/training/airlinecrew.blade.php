@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Airline Cabin Crew Training</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/training-hero.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Airline Cabin Crew Training</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Airline Cabin Crew Training</a> </li>
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
                                <p style="text-align: justify;"><strong>AIRLINE CABIN CREW TRAINING:</strong></p>
                                <p style="text-align: justify;">
                                    Working as cabin crew for a major airline is an exciting and challenging experience. In addition to 
                                    jetting off to exotic destinations, the job also requires a high degree of responsibility and 
                                    specialization to ensure the safety and comfort of passengers in line with industry regulations.
                                    This course is ideal for young professionals looking to get a head start in the profession, introducing the skills and responsibilities
                                    expected by the world’s leading airlines. Special emphasis is given to customer service and procedures for handling unusual situations during flight, with the final module of the course giving useful tips for completing the recruitment process.

                                    </p>

                                     <p style="text-align: justify;"><strong>COURSE DURATION:</strong></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">45 hours</span></p>
                                    <br>
                                     <p style="text-align: justify;"><strong>WHAT YOU WILL LEARN:</strong></p>
                                     <p style="text-align: left;"><span style="font-size: 12.16px;">Upon completing this course you will have the skills to:</span></p>

                                     <li>Understand the cabin crew profession, its origins and current practices  </span></li>
                                     <li>Identify aircraft types and relevant cabin crew functions</span></li>
                                     <li>Manage passenger interactions in a variety of circumstances</span></li>
                                     <li>Recall emergency and safety procedures</span></li>
                                    <br>
                                     <p style="text-align: justify;"><strong>COURSE CONTENT:</strong></p>
                                     <li>Introduction to the airline industry and aircraft </span></li>
                                     <li>Crew member coordination and communication </span></li>
                                     <li>Customer service and managing passenger interactions</span></li>
                                     <li>Safety and emergency procedures (with virtual cabin walkthrough – narrow and wide body aircraft)</span></li>
                                    <br>
                                     <p style="text-align: justify;"><strong>WHO SHOULD ATTEND:</strong></p>
                                     <p style="text-align: left;"><span style="font-size: 12.16px;">This course is recommended for:</span></p>
                                     <li>Aspiring cabin crew members</span></li>
                                    <br>
                                     <p style="text-align: justify;"><strong>CERTIFICATE AWARDED:</strong></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">An IATA Certificate is awarded to participants successfully passing the final exam.</span></p>
                                     <br><br>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">For more information about the course please visit the official website of IATA at: </span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;"><a href="https://www.iata.org/en/training/courses/airline-cabin-crew/84/en/">https://www.iata.org/en/training/courses/airline-cabin-crew/84/en/</a></span></p>
                                     
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
