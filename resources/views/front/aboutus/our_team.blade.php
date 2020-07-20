@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Our Team</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/teams/team.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>Our Team</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li><a href="{{ route('about') }}">About Us</a> </li>                    
                    <li class="active"><a href="#">Our Team</a> </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Board of Directors</h2>
                <span>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. The most happiest
                    time of the day!. Morbi sagittis, sem quis lacinia faucibus. </span>
            </div>
            <div class="row team-members m-b-40">
                @foreach($teams->where('type', 'Board of Directors') as $team)
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="{{ asset('public/img/teams') }}/{{ $team->avatar }}" height="255" style="object-fit: cover;">
                            </div>
                            <div class="team-desc">
                                <h3>{{ $team->name }}</h3>
                                <span>{{ $team->designation }}</span>
                                <p></p>
                                <div class="align-center">
                                    @if($team->facebook)
                                        <a class="btn btn-xs btn-slide btn-light" href="{{ $team->facebook }}" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                    @endif
                                    @if($team->linkedin)
                                        <a class="btn btn-xs btn-slide btn-light" href="{{ $team->linkedin }}" target="_blank" data-width="100">
                                            <i class="fab fa-linkedin"></i>
                                            <span>Linkedin</span>
                                        </a>
                                    @endif
                                    @if($team->twitter)
                                        <a class="btn btn-xs btn-slide btn-light" href="{{ $team->twitter }}" target="_blank" data-width="118">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                    @endif
                                    @if($team->email)
                                        <a class="btn btn-xs btn-slide btn-light" href="mailto:{{ $team->email }}" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="seperator"></div>
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Advisory Team</h2>
                <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum
                    gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                    ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci.
                </span>
            </div>
            <div class="row team-members m-b-40">
                @foreach($teams->where('type', 'Advisory') as $team)
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="{{ asset('public/img/teams') }}/{{ $team->avatar }}" height="255" style="object-fit: cover;">
                            </div>
                            <div class="team-desc">
                                <h3>{{ $team->name }}</h3>
                                <span>{{ $team->designation }}</span>
                                <p></p>
                                <div class="align-center">
                                    @if($team->facebook)
                                    <a class="btn btn-xs btn-slide btn-light" href="{{ $team->facebook }}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    @endif
                                    @if($team->linkedin)
                                    <a class="btn btn-xs btn-slide btn-light" href="{{ $team->linkedin }}" target="_blank" data-width="100">
                                        <i class="fab fa-linkedin"></i>
                                        <span>Linkedin</span>
                                    </a>
                                    @endif
                                    @if($team->twitter)
                                    <a class="btn btn-xs btn-slide btn-light" href="{{ $team->twitter }}" target="_blank" data-width="118">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    @endif
                                    @if($team->email)
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:{{ $team->email }}" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="seperator"></div>
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>NAAT Team</h2>
                <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum
                    gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                    ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci.
                </span>
            </div>
            <div class="row team-members m-b-40">
                @foreach($teams->where('type', 'Other') as $team)
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="{{ asset('public/img/teams') }}/{{ $team->avatar }}" height="255" style="object-fit: cover;">
                            </div>
                            <div class="team-desc">
                                <h3>{{ $team->name }}</h3>
                                <span>{{ $team->designation }}</span>
                                <p></p>
                                <div class="align-center">
                                    @if($team->facebook)
                                    <a class="btn btn-xs btn-slide btn-light" href="{{ $team->facebook }}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    @endif
                                    @if($team->linkedin)
                                    <a class="btn btn-xs btn-slide btn-light" href="{{ $team->linkedin }}" target="_blank" data-width="100">
                                        <i class="fab fa-linkedin"></i>
                                        <span>Linkedin</span>
                                    </a>
                                    @endif
                                    @if($team->twitter)
                                    <a class="btn btn-xs btn-slide btn-light" href="{{ $team->twitter }}" target="_blank" data-width="118">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    @endif
                                    @if($team->email)
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:{{ $team->email }}" data-width="80">
                                        <i class="icon-mail"></i>
                                        <span>Mail</span>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection