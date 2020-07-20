<!DOCTYPE html>
<html>

    <head>
        <title>{{ env('APP_NAME') }} | Reset</title>
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

            @if (session('error'))
            <div class="alert alert-danger">
                <h2>{{ session('error') }}</h2>
            </div>
            @endif
            <div>
                <div class="main-agileinfo">
                    <div class="agileits-top">
                        <form action="{{ route('password.update') }}" method="post">
                            <input id="email" type="email" placeholder="Email"
                                class="text form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif

                            <input id="password" type="password" placeholder="Password"
                                class="text form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password" required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif

                            <input id="password-confirm" type="password" placeholder="Confirm Password"
                                class="text form-control" name="password_confirmation" required>

                            <input type="submit" value="Reset Password">
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
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