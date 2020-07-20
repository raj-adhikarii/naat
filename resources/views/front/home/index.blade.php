@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Home</title>
@endsection

@section('styles')
    <style>
        svg#yt_player_btn:hover>path:first-child{
            fill: red!important;
        }
    </style>
@endsection

@section('content')
    <div id="slider" class="inspiro-slider tp-revslider-slidesli arrows-large arrows-creative dots-creative" data-autoplay data-height=510>
        <div class="slide background-overlay-gradient kenburns background-image" style="background-image:url({{ asset('public/img/slider/1.jpg') }});">
            <div class="container">
                <div class="slide-captions text-light">
                    <h1>Northen Light Academy of Aviation and Technology (NAAT)</h1>
                    {{-- <p>NAAT seeks to create and sustain an aviation and education system that fosters individual aviation career. </p> --}}
                    <a href="#welcome" class="btn btn-grad scroll-to">Explore more</a>
                </div>
            </div>
        </div>

        <div class="slide background-overlay-gradient kenburns background-image" style="background-image:url({{ asset('public/img/slider/2.jpg') }});">
            <div class="container">
                <div class="slide-captions text-light">
                    <h1>Internationally recognized by 82+ countries </h1>
                    {{-- <p class="text-small">International job placement</p> --}}
                    <a href="#welcome" class="btn btn-grad scroll-to">Explore more</a>
                </div>
            </div>
        </div>

        <div class="slide background-overlay-gradient kenburns background-image" style="background-image:url({{ asset('public/img/slider/3.jpg') }});">
            <div class="container">
                <div class="slide-captions text-light">
                    <h1>Creating work force of tomorrow </h1>
                    {{-- <p class="text-small">Vocational courses</p> --}}
                    <a href="#welcome" class="btn btn-grad scroll-to">Explore more</a>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Our Expertise --}}
    <section class="background-grey expertise">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Our expertise that people trust</h2>
            </div>
            <div class="row mt-60">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="serv-section-2">
                        <div class="serv-section-desc">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="{{ asset('public/img/cabin.jpg') }}" alt="">
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <h4>Cabin Crew Training</h4>
                                    <div class="section-heading-line-left"></div>
                                    <p style="text-align: justify;">The growing demands in the airlines of trained people are increasing day by day. Within the growing ferocious competition all around the globe, it is a real challenge to prepare oneself as a deserving candidate for the post. NAAT considering this fact has designed international standard courses that supplement...</p>
                                    <div class="mt-20 left-holder"> <a href="{{ route('cabincrew') }}" class="btn btn-grad" style="color: white;">Read More</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="serv-section-2">
                        <div class="serv-section-desc">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="{{ asset('public/img/airport.jpg') }}" alt="">
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <h4>Airport Ground Handling</h4>
                                    <div class="section-heading-line-left"></div>
                                    <p style="text-align: justify;">NAAT’s courses and programs can be tailored to suit your individual requirements, in partnership with our recognised global affiliates. We are a market-driven aviation training organisation, with a comprehensive and modern aviation training infrastructure. All our courses are conducted...
                                    </p>
                                    <div class="mt-20 left-holder"> <a href="{{ route('airport') }}" class="btn btn-grad" style="color: white;">Read More</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="serv-section-3">
                        <div class="serv-section-desc">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="{{ asset('public/img/n3.jpg') }}" alt="">
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <h4>Pilot Training</h4>
                                    <div class="section-heading-line-left"></div>
                                    <p style="text-align: justify;">We offer aspiring pilots an opportunity to find a rewarding career in aviation as an airline pilot. We represent various reputed flight schools across the globe and are designated as authorized country representatives for those flight schools. Popular destination for pilot training includes South...
                                    </p>
                                    <div class="mt-20 left-holder"> <a href="{{ route('cabincrew') }}" class="btn btn-grad" style="color: white;">Read More</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-12">
                    <div class="serv-section-3">
                        <div class="serv-section-desc">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="{{ asset('public/img/aircraft.jpg') }}" alt="">
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <h4>Aircraft Maintenance Engineering</h4>
                                    <div class="section-heading-line-left"></div>
                                    <p style="text-align: justify;">If your passion is in aviation and you love to work with airplanes then Aircraft Maintenance Engineering can be a promising career for you. Currently NAAT offers AME courses for both freshers and professionals. If you are a high school graduate and you have...
                                    </p>
                                    <div class="mt-20 left-holder"> <a href="{{ route('aircraft') }}" class="btn btn-grad" style="color: white;">Read More</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Gallery --}}
    <section class="p-b-0 background-white">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Gallery</h2>
                {{--<span class="lead">Lorem ipsum dolor sit amet, coper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</span>--}}
            </div>

            <div class="carousel arrows-creative dots-creative" data-autoplay data-autoplay-timeout="4000" data-hoverpause="true" data-loop="true" data-items="3" data-dots="false" data-lightbox="gallery" style="padding:15px 0px;">
                @foreach($galleries as $gallery)
                <div class="grid-item">
                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{ asset('public/img/gallery/album_'.$gallery->album_id) }}/{{ $gallery->url }}" alt="" style="height:235px;object-fit: cover;"/></a>
                                <a data-lightbox="gallery-image" href="{{ asset('public/img/gallery/album_'.$gallery->album_id) }}/{{ $gallery->url }}"
                                    style="position: absolute; top:0; left: 0; height: 100%; width: 100%; z-index: 99;"></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- <div class="portfolio">
            <div class="content col-lg-12">
                <div class="grid-layout grid-4-columns" data-margin="10" data-item="grid-item" data-lightbox="gallery">
                    @foreach($galleries as $gallery)
                        <div class="grid-item">
                            <a class="image-hover-zoom" href="{{ asset('public/img') }}/{{ $gallery->image }}" data-lightbox="gallery-image"><img src="{{ asset('public/img') }}/{{ $gallery->image }}"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> --}}

    </section>

    {{-- We are NAAT --}}
    <section class="background-grey" id="welcome" class="p-b-0">
        <div class="container">
            <div class="heading-text heading-section text-center m-b-40" data-animate="fadeInUp">
                <h2>We are NAAT</h2>
                {{-- <span class="lead">Authorized Training Centre</span> --}}
            </div>
            <div class="row" data-animate="fadeInUp" style="padding:15px 0px;">
                <div class="col-lg-6 col-12 col-md-12 col-sm-12" style="padding-bottom: 40px;">
                    <img class="img-fluid" src="{{ asset('public/img/flight.jpg') }}" alt="Welcome to {{ config('app.name') }}">
                </div>
                <div class="col-lg-6 col-12 col-md-12 col-sm-12" style="padding-top: 40px;">
                    <p style="text-align: justify;">We help people transform their lives by helping them to tap into their potential to develop the skills they need to get their first job, progress on to higher level and become globally mobile. Our courses are recognized in 82 countries and we work towards solving local skill shortage problem by creating the work force of tomorrow. To solve the skill shortage problem globally, we provide internationally recognized vocational courses that will develop skill set in the area of your desire after which you will be able to find a job placement in the relevant industry through the network of our partner organization.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- News and Notices (Blogs) --}}
    <section class="background-white">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>News and Notices</h2>
                {{--<span class="lead">Get yourself updated. </span>--}}
            </div>
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item" style="padding-top:15px;">
                @foreach($events as $event)
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="{{ route('detailEvents',$event->slug) }}">
                                <img alt="" src="{{ asset('public/img/events') }}/{{ $event->thumbnail }}">
                            </a>
                        </div>

                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('Y M d',strtotime($event->created_at)) }}</span>
                            <h2><a href="{{ route('detailEvents',$event->slug) }}">{{ $event->title }}</a></h2>
                            <p>{!! substr($event->description, 0, 120) . '...';!!}</p>
                            <a href="{{ route('detailEvents',$event->slug) }}" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <p style="text-align:center;">
                <a href="{{ route('events') }}" class="btn btn-grad">View all</a>
            </p>
        </div>
    </section>

    {{-- Testimonials --}}
    {{-- <section class="background-white">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Testimonials</h2>
            </div>
            <div class="row mt-60">
                @foreach($testimonials as $testimonial)
                    <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="serv-section-2">
                            <div class="serv-section-desc">
                                <h4>{{ $testimonial->name }}</h4>
                                <h5>{{ $testimonial->designation }}</h5>
                            </div>
                            <div class="section-heading-line-left"></div>
                            <p>{{ $testimonial->testimony }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <p style="text-align:center;">
                <a href="{{ route('testimonials') }}" class="btn btn-grad" style="margin-top: 40px;">View all</a>
            </p>
        </div>
    </section> --}}
    <Section class="background-grey">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Testimonials</h2>
            </div>
            <div class="carousel arrows-visibile testimonial testimonial-single testimonial-left" data-items="1"
                data-autoplay="false" data-hoverpause="true" data-loop="true" data-autoplay="3500" data-dots="false">
                @foreach($testimonials as $testimonial)            
                    <div class="testimonial-item">
                        <img src="{{ asset('public/img/testimonials') }}/{{ $testimonial->avatar }}">
                        <p>{{ $testimonial->testimony }}</p>
                        <span>{{ $testimonial->name }}</span>
                        <span>{{ $testimonial->designation }}</span>
                    </div>
                @endforeach
            </div>
            <p style="text-align:center;">
                <a href="{{ route('testimonials') }}" class="btn btn-grad" style="margin-top: 10px;">View all</a>
            </p>
        </div>
    </Section>

    {{-- Video Gallery --}}
    <section class="background-white">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Video Gallery</h2>
            </div>
            <div class="row mt-60">
                <div class="col-12 col-md-12 col-lg-3 col-xl-3" style="margin-top: 20px;">
                    <div class="yt_player_thumbnail" style="position: relative">
                        <img style="width: 100%;"
                            src="https://i.ytimg.com/vi/X2e_YKemc9c/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBEfXzDiqRVXsQTgFciHaKaZbmsvQ"
                            alt="" />
                        <a style="position: absolute; top: 50%; left: 50%; width: 25%; transform: translate(-50%, -50%);"
                            title="Paper Pouch!" data-lightbox="iframe" href="https://www.youtube.com/watch?v=X2e_YKemc9c">
                            <svg id="yt_player_btn" height="100%" version="1.1" viewBox="0 0 68 48" width="100%">
                                <path class="ytp-large-play-button-bg"
                                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                    fill="#212121" fill-opacity="0.8"></path>
                                <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 col-xl-3" style="margin-top: 20px;">
                    <div class="yt_player_thumbnail" style="position: relative" data-toggle="modal"
                        data-target="#videoModal" data-videoId="-B16URHUT4I">
                        <img style="width: 100%;"
                            src="https://i.ytimg.com/vi/-B16URHUT4I/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLA0ibIo6lSfrjG5LGrlxCGQ6QacCw"
                            alt="" />
                        <a style="position: absolute; top: 50%; left: 50%; width: 25%; transform: translate(-50%, -50%);"
                            title="Paper Pouch!" data-lightbox="iframe" href="https://www.youtube.com/watch?v=-B16URHUT4I">
                            <svg id="yt_player_btn" height="100%" version="1.1" viewBox="0 0 68 48" width="100%">
                                <path class="ytp-large-play-button-bg"
                                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                    fill="#212121" fill-opacity="0.8"></path>
                                <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 col-xl-3" style="margin-top: 20px;">
                    <div class="yt_player_thumbnail" style="position: relative" data-toggle="modal"
                        data-target="#videoModal" data-videoId="l25jQNWh6mc">
                        <img style="width: 100%;"
                            src="https://i.ytimg.com/vi/l25jQNWh6mc/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAs1TCTBW208_Zd3NXSW8_-MF05yw"
                            alt="" />
                        <a style="position: absolute; top: 50%; left: 50%; width: 25%; transform: translate(-50%, -50%);"
                            title="Paper Pouch!" data-lightbox="iframe" href="https://www.youtube.com/watch?v=l25jQNWh6mc">
                            <svg id="yt_player_btn" height="100%" version="1.1" viewBox="0 0 68 48" width="100%">
                                <path class="ytp-large-play-button-bg"
                                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                    fill="#212121" fill-opacity="0.8"></path>
                                <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3 col-xl-3" style="margin-top: 20px;">
                    <div class="yt_player_thumbnail" style="position: relative" data-toggle="modal"
                        data-target="#videoModal" data-videoId="LpRo5_8tLcY">
                        <img style="width: 100%;"
                            src="https://i.ytimg.com/vi/LpRo5_8tLcY/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLCm5QkpxnIu0vZDiHg39uvxt3ICbg"
                            alt="" />
                        <a style="position: absolute; top: 50%; left: 50%; width: 25%; transform: translate(-50%, -50%);"
                            title="Paper Pouch!" data-lightbox="iframe" href="https://www.youtube.com/watch?v=LpRo5_8tLcY">
                            <svg id="yt_player_btn" height="100%" version="1.1" viewBox="0 0 68 48" width="100%">
                                <path class="ytp-large-play-button-bg"
                                    d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                    fill="#212121" fill-opacity="0.8"></path>
                                <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12" style="margin-top: 80px; text-align:center;">
                    <a href="https://www.youtube.com/channel/UCIbp0Ui8lTnJWYZVNvo5aLA" target="_blank"
                        rel="noopener noreferrer" class="btn btn-grad">
                        View Channel
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Affiliations --}}
    <section class="background-grey">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Affiliations/Partners/Membership</h2>
            </div>
            <div class="carousel" data-items="5" data-items-sm="3" data-items-xs="2" data-items-xxs="2" data-margin="20" data-arrows="false" data-hoverpause="true" data-dots="false" data-autoplay data-autoplay-timeout="3000" data-loop="true" style="padding:15px 0px;">
                <div>
                    <a href="#"> <img alt="" src="{{ asset('public/img/affiliations/1.png') }}"> </a>
                </div>
                <div>
                    <a href="#"> <img alt="" src="{{ asset('public/img/affiliations/6.png') }}"> </a>
                </div>
                <div>
                    <a href="#"> <img alt="" src="{{ asset('public/img/affiliations/3.png') }}"> </a>
                </div>
                <div>
                    <a href="#"> <img alt="" src="{{ asset('public/img/affiliations/4.png') }}"> </a>
                </div>
                <div>
                    <a href="#"> <img alt="" src="{{ asset('public/img/affiliations/5.png') }}"> </a>
                </div>
                <div>
                    <a href="#"> <img alt="" src="{{ asset('public/img/affiliations/2.png') }}"> </a>
                </div>
            </div>
        </div> 
    </section>

    {{-- Recruitment Partners  --}}
    <Section class="background-white">
        <div class="heading-text heading-section text-center">
            <h2>Recruitment Partners</h2>
        </div>
        <div style="padding:15px 0px;">
            <ul class="grid grid-6-columns text-center">
                <li></li>
                <li></li>
                <li>
                    <a href="http://www.aspirejobszone.com/" target="_blank"><img alt="" src="{{ asset('public/img/recruitment-partners/aspire.png') }}"></a>
                </li>
                <li>
                    <a href="http://www.globaloverseas.com.np/sister-corners.html" target="_blank"><img alt="" src="{{ asset('public/img/recruitment-partners/global.png') }}"></a>
                </li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </Section>

    {{-- <div id="modalApplyOnline" class="modal modal-auto-open" data-delay="3000"
        style="background: url({{asset('public/img/apply-online-900x350.jpg') }}) no-repeat; background-size: cover;
        background-position: center top; max-width: 800px; min-height:450px">
        <div class="text-light p-t-30 text-center" style="margin-top:50px;">
            <h1 class="m-b-0">Apply Online!</h1>
            <h5>Apply for your interested course now.</h5>
            <div class="widget widget-newsletter m-b-10 m-t-30">
                <a class="btn btn-grad" style="font-size:14px; color: white;padding: 14px 20px;border-radius:5px;height:unset;"
                    href="#modalApplyOnlineForm" data-lightbox="inline">APPLY NOW</a>
            </div>
        </div>
    </div> --}}
@endsection