@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Airport Ground Handling</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/training-hero.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Airport Ground Handling</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Airport Ground Handling</a> </li>
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
                                        <img alt="" src="{{ asset('public/img/airport.jpg') }}">
                                    </a>
                                </div>
                                <br>
                                <div itemprop="articleBody">
                                    <p style="text-align: justify;">NAAT’s courses and programs can be tailored to suit your individual requirements, in partnership with our recognised global affiliates. We are a market-driven aviation training organisation, with a comprehensive and modern aviation training infrastructure. All our courses are conducted with state-of-the-art equipment with the latest designed international curricula, ensuring that we can offer you any training program and customize our services to meet your needs. Training sessions are also conducted on Tribhuwan International Airport’s premises and at other aviation facilities around the world with the relevant equipment and requirements.</p>
                                    <p style="text-align: justify;"><span style="font-size: 10pt;"><strong>Our programs are flexible to your needs.</strong></span></p>
                                    <p style="text-align: justify;"><strong>Level 1 Certificate in Exploring the Aviation Industry (4955-01)</strong></p>
                                    <p style="text-align: justify;">This level will suit you if you are interested in a career in the aviation industry and if you have an appetite to learn, develop and practice the skills required for employment in the aviation sector. There are <strong>SIX</strong> core units</p>
                                    <ul style="text-align: justify;">
                                        <li>The aviation Industry</li>
                                        <li>Aviation Terminology</li>
                                        <li>Airport Locational Geography</li>
                                        <li>Customer Service in Aviation</li>
                                        <li>Team Work in the Aviation Industry</li>
                                        <li>Preparation for Entry to the Employment in the Aviation Industry</li>
                                    </ul>
                                    <h4 style="text-align: justify;">WHAT CAREERS CAN THIS LEAD TO?</h4>
                                    <p style="text-align: justify;">It allows candidates to progress into employment or to the following qualifications:</p>
                                    <ul style="text-align: justify;">
                                        <li>Level 1 Certificate in Introduction to Travel and Tourism Industry</li>
                                        <li>Level 1 Diploma in Introduction to Travel and Tourism Industry</li>
                                        <li>Level 2 Certificate in Introduction to Cabin Crew</li>
                                    </ul>
                                    <p style="text-align: justify;"><strong>Level 2 Certificate in Aviation Operation on the Ground (4955-22)</strong></p>
                                    <p style="text-align: justify;">This level will suit you if you want to work in an airport in ground operations and impart considerable knowledge and basic skills. You need to gain a formal qualification that recognises your skills and develop your knowledge to take on more responsibility at work. There are <strong>FOUR</strong> core units</p>
                                    <ul style="text-align: justify;">
                                        <li>Health and Safety within Aviation</li>
                                        <li>Aviation Security</li>
                                        <li>Aviation Communications</li>
                                        <li>Airport Check in Services</li>
                                    </ul>
                                    <h4 style="text-align: justify;">WHAT CAREERS CAN THIS LEAD TO?</h4>
                                    <p style="text-align: justify;">The Diplomas in Aviation Operations on the Ground can help you progress in a wide range of airport roles including manning a check-in desk, working with aircraft ramps, or coordinating ground operations in an airport.</p>
                                    <p style="text-align: justify;"><strong>Level 2 Diploma in Aviation Environment (4955-23)</strong></p>
                                    <p style="text-align: justify;">The Level 2 Diploma in Aviation Operations on the Ground is ideal if you've been working in ground operations for some time - you have plenty of experience and you might already have some supervisory or management responsibilities. You want a formal qualification that could help you move into a management role. There are <strong>THIRTEEN</strong> core units</p>
                                    <ul style="text-align: justify;">
                                        <li>Health and Safety within Aviation</li>
                                        <li>Aviation Security</li>
                                        <li>Aviation Communications</li>
                                        <li>Airport Check in Services</li>
                                        <li>Aircraft Boarding and Arrival Services</li>
                                        <li>Airport Baggage Processing</li>
                                        <li>Loading and Unloading of Aircraft</li>
                                        <li>Airport Baggage Facilities</li>
                                        <li>Aviation Passengers with Special Requirements</li>
                                        <li>Aircraft Load Instructions Reports</li>
                                        <li>Aircraft Marshaling</li>
                                        <li>Support Flight Operations</li>
                                        <li>Aircraft Dispatch Processes</li>
                                    </ul>
                                    <p style="text-align: justify;">&nbsp;</p>
                                    <h4 style="text-align: justify;">WHAT CAREERS CAN THIS LEAD TO?</h4>
                                    <p style="text-align: justify;">The Diplomas in Aviation Operations on the Ground can help you progress in a wide range of airport roles including manning a check-in desk, working with aircraft ramps, or coordinating ground operations in an airport.</p> 	</div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-4 col-12">
                    <div class="services-single-left-box">
                        <div class="services-single-left-heading">
                            <h4>Services</h4>
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
                                                <li><a href="#">Level 2 Diploma in Air Cabin Crew</a></li>
                                                <li><a href="#">Level 2 Diploma in Airport Ground Handling</a></li>
                                                <li><a href="#">Level 2 Diploma in International Tourism</a></li>
                                                <li><a href="#">Level 3 Advanced Diploma in International Tourism</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ac-item ac-active">
                                        <h5 class="ac-title">
                                            IATA Courses
                                        </h5>
                                        <div class="ac-content">
                                            <ul class="sub-list">
                                                <li class="services-active"><a href="{{ route('airport') }}">Passenger Ground Services</a></li>
                                                <li><a href="#">Airport Ramp Services</a></li>
                                                <li><a href="#">Ground Operations Management</a></li>
                                                <li><a href="{{ route('cabincrew') }}">Airline Cabin Crew Training</a></li>
                                                <li><a href="#">Dangerous Goods Regulations (DGR) Initial Category 3</a></li>
                                                <li><a href="#">Dangerous Goods Regulations (DGR) Recurrent Category 3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ac-item">
                                        <h5 class="ac-title">
                                            EASA Part 66
                                        </h5>
                                        <div class="ac-content">
                                            <ul class="sub-list">
                                                <li><a href="#">Modular course and examination</a></li>
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
