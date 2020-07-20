@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Success Stories</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/success-hero.jpg') }}" style="background-position: center;">
        <div class="container">
            <div class="page-title">
                <h1>NAAT Success Stories</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a> </li>
                    <li class="active"><a href="#">Success Stories</a> </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="background-white">
        <div class="container">
            <div class="row team-members team-members-left team-members-shadow m-b-40">
                @foreach($stories as $story)
                    <div class="col-lg-6">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="{{ asset('public/img/success_stories') }}/{{ $story->avatar }}" />
                            </div>
                            <div class="team-desc">
                                <h3>{{ $story->name }}</h3>
                                <span>{{ $story->organization }}</span><br>
                                <span>{{ $story->designation }}</span>
                                <p>{{ $story->batch }}</p>
                                <div class="align-center">
                                    @if($story->facebook)
                                        <a class="btn btn-xs btn-slide btn-light" href="{{ $story->facebook }}" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                    @endif
                                    @if($story->linkedin)
                                        <a class="btn btn-xs btn-slide btn-light" href="{{ $story->linkedin }}" target="_blank" data-width="100">
                                            <i class="fab fa-linkedin"></i>
                                            <span>Linkedin</span>
                                        </a>
                                    @endif
                                    @if($story->twitter)
                                        <a class="btn btn-xs btn-slide btn-light" href="{{ $story->twitter }}" target="_blank" data-width="118">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                    @endif
                                    @if($story->email)
                                        <a class="btn btn-xs btn-slide btn-light" href="mailto:{{ $story->email }}" data-width="80">
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