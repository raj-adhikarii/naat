@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | News and Notice</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/events/events-hero.jpg') }}">
        <div class="container">
            <div class="page-title">
                <h1>News and Notice</h1>
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
                    <div class="page-title">
                        <h1>News and Notice</h1>
                        <div class="breadcrumb float-left">
                            <ul>
                                <li><a href="{{ asset('/') }}">Home</a>
                                </li>
                                <li><a href="{{ route('events') }}">News and Notice</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div id="blog" class="post-thumbnails">
                        @foreach($events as $event)
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="{{ route('detailEvents',$event->slug) }}">
                                        <img alt="" src="{{ asset('public/img/events') }}/{{ $event->thumbnail }}">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ date('Y M d',strtotime($event->created_at)) }}</span>
                                    <h2><a href="{{ route('detailEvents',$event->slug) }}">{{ $event->title }}</a></h2>
                                    <p>{!! substr($event->description, 0, 100) . '...';!!}</p>
                                    <a href="{{ route('detailEvents',$event->slug) }}" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
