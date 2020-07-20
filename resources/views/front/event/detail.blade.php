@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | {{ $event->title }}</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/events/events-hero.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>{{ $event->title }}</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a>
                    </li>
                    <li><a href="{{ route('events') }}">News and Notice</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-8">
                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="{{ asset('public/img/events') }}/{{ $event->thumbnail }}">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2>{{ $event->title }}</h2>
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('Y M d',strtotime($event->created_at)) }}</span>

                                    </div>
                                    <p>{!! $event->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar sticky-sidebar col-lg-4">
                    <div class="widget" style="border: unset;">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNAAT147%2F&tabs=timeline&width=340&height=550&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=172302859541280"
                            style="border:none;overflow:hidden;height: 550px;" scrolling="no" frameborder="0" allowTransparency="true"
                            allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
