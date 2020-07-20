<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="{{ asset('public/fav.png')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        
        @yield('title')
        
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        
        <!-- Bootstrap core CSS     -->
        <link href="{{ asset('public/back/css/bootstrap.min.css') }}" rel="stylesheet" />
        
        <!-- Animation library for notifications   -->
        <link href="{{ asset('public/back/css/animate.min.css') }}" rel="stylesheet" />
        
        <!--  Light Bootstrap Table core CSS    -->
        <link href="{{ asset('public/back/css/light-bootstrap-dashboard.css') }}" rel="stylesheet" />     
        
        <!--     Fonts and icons     -->
        <link href="{{ asset('public/back/css/fontawesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/back/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

        {{-- Custom CSS --}}
        <link href="{{ asset('public/back/css/style.css') }}" rel="stylesheet" />
        
        @yield('styles')
    </head>

    <body>

        <div class="wrapper">

            @include('back.includes.sidebar')

            <div class="main-panel">

                @include('back.includes.header')

                @yield('content')

                @include('back.includes.footer')
            </div>
        </div>


    </body>

    <!--   Core JS Files   -->
    <script src="{{ asset('public/back/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/back/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/back/js/light-bootstrap-dashboard.js') }}" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('public/back/js/bootstrap-notify.js') }}"></script>

    @yield('scripts')

</html>