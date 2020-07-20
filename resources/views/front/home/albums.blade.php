@extends('layouts.front')

@section('title')
    <title>{{ config('app.name') }} | Gallery Albums</title>
@endsection

@section('content')
    <section id="page-title" data-parallax-image="{{ asset('public/img/gallery/gallery-hero.jpg') }}" style="background-position: center">
        <div class="container">
            <div class="page-title">
                <h1>Gallery Albums</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a>
                    </li>
                    <li><a href="{{ route('front.albums') }}">Gallery Albums</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-8">
                    <div class="grid-layout grid-2-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
                        @foreach($albums as $album)
                            @if($album->images->isNotEmpty())
                                <div class="grid-item album-cover">
                                    <h5>{{ $album->name}}</h5>
                                    <a href="{{ route('front.album.images', $album->id) }}">
                                        <img src="{{ asset('public/img/gallery/album_'.$album->id) }}/{{ $album->images->first()->url }}">
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                
                <div class="sidebar sticky-sidebar col-lg-4">
                    <div class="widget ">
                        <h4 class="widget-title">Recent Posts</h4>
                        @foreach($recentEvents as $event)
                            <div class="post-thumbnail-list">
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="{{ asset('public/img/events') }}/{{ $event->thumbnail }}">
                                    <div class="post-thumbnail-content">
                                        <a href="{{ route('detailEvents',$event->slug) }}">{{ $event->title }}</a>
                                        <span class="post-date"><i class="far fa-clock"></i>{!! date('M',strtotime($event->created_at)) !!} {!! date('d',strtotime($event->created_at)) !!}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

