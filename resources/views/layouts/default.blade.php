<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Louis Vuitton</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 30vh;
            }
            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>    
        <div class="flex-center position-ref full-height">
            
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                <a href="{{ url('/home') }}">{{ (auth()->user()->name) }}</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>        

                        @if (Route::has('register'))

                            {{--Link to register admin,
                                register admin in DB then remove this link
                                <a href="{{ route('register') }}">Register</a> --}}
                        @endif
                    @endauth
                </div>
            @endif
            <div class="top-left links">
                    <a href="/">Home</a>
                    <a href="/scan">Scan</a>
                    @if (Auth::check())
                    <a href="/participants">Participants</a>       
                    @endif             
            </div>
            <header class="content">
                @include('layouts.header')
            </header>
            
        </div>
        <div class="content">
            @yield('content')
        </div>
        <footer>
            @include('layouts.footer')
        </footer>
        
    </body>
</html>
