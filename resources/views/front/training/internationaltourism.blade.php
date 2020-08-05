@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Level 2 Diploma in International Tourism</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/training-hero.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Level 2 Diploma in International Tourism</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="#">Level 2 Diploma in International Tourism</a> </li>
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
                                <p style="text-align: justify;"><strong> LEVEL 2 DIPLOMA IN INTERNATIONAL TOURISM:</strong></p>
                                <p style="text-align: justify;">
                                   Tourism is one of the largest and fast booming global industries worth trillions of dollars.
                                    Today millions of people worldwide work in the tourism sector or one of its associated 
                                    industries and the trends predict that the manpower involved in this sector will only
                                     continue to increase as tourism becomes more and more globalized.
                                    Since the tourism industry is itself so large and diverse, there many opportunities in
                                     terms of career choices for those looking to grow and develop themselves in this field.
                                      So, the Diploma in International Tourism course is designed to train interested students
                                       to prepare them for a career in tourism and related industries.


                                    </p>
                                    <strong>WHY LEVEL 2 DIPLOMA IN INTERNATIONAL TOURISM</strong>
                                    <p>Tourism is a vast industry that easily crosses over to multiple other domains like
                                         aviation and hospitality. Having a Level 2 Diploma in International Tourism will 
                                         not only prepare you for a career in one of these industries but also provide you
                                          with a perspective on how different disciplines of tourism come together as a business
                                           whose main goal is economic benefit.
                                        Some of the lucrative career options for the students with Level 2 Diploma in International
                                         Tourism include tour guide, travel agent, sales and marketing manager, public relations
                                          officer and tour planner among others.
.</p>

                                    <p style="text-align: justify;"><strong>ELIGIBILITY:</strong></p>
                                    <p style="text-align: justify;"><strong>Age:</strong> 16 to 35 years.</p>
                                    <p style="text-align: justify;"><strong>Qualifications: </strong>High school/ +2 graduate, Good communication skills and amicable personality</p>
                                    
                                    
                                    <p style="text-align: justify;"><strong>CAREER OPPORTUNITIES:</strong></p>
                                     <ul style="text-align: justify;">
                                        <li>Tourism, Hospitality and Aviation industry</li>
                                     </ul>

                                     <p style="text-align: justify;"><strong>COURSE DURATION:</strong></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">1 year</span></p>

                                     <p style="text-align: justify;"><strong>COURSE STRUCTURE:</strong></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">1. The Development of the Tourism Industry</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">2. International Tourism Geography</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">3. Customer Service operations</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">4. People Development</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">5. Business Systems</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">6. Marketing Operations</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">7. Developing a Local Tourism Destination</span></p>
                                     <p style="text-align: justify;"><span style="font-size: 12.16px;">8. Related Tourism Services</span></p>
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
