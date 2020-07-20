<!DOCTYPE html>
<html>

    <head>
        <title>{{ env('APP_NAME') }} | Forget Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- Custom Theme files -->
        <link href="{{asset('public/back/css/login-style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link rel="icon" type="image/png" href="{{ asset('public/fav.jpg')}}">
        <!-- //Custom Theme files -->
    </head>

    <body>
        <!-- main -->
        <div class="login-layout wrapper">
            <div>
                <div class="main-agileinfo">
                    <div class="agileits-top">
                        <form action="{{ route('password.email') }}" method="post">
                            @csrf
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            <input id="email" type="email" placeholder="Enter Email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                    <input type="submit" value="Send Password Reset Link">
                    </form>
                    <p>Don't have an Account? Contact System Admin.</p>
                </div>
            </div>
            <!-- copyright -->
            <div class="copyright-agile">
                <p>Copyright © 2018. All Rights Reserved | Designed by <a href="https://asterdio.com/"
                        target="_blank">Asterdio Inc.</a></p>
            </div>
            <!-- //copyright -->
        </div>
        <ul class="w3lsg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        </div>
        <!-- //main -->
    </body>

</html>