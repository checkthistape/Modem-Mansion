<!DOCTYPE HTML>
<html>

<head>
    <title>Modem Mansion Forum ~ Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icons/tab/possible-temporary-icon.ico') }}"> {{-- "../../icons/tab/possible-temporary-icon.ico"--}}

    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
        window.onload = function() {
            randomBanner();
        };
    </script>

</head>

<body>

    <div class="wrapper">
        <div class="wcag">
            <img src="/assets/icons/Aa_icon.png" width="40" height="40">
        </div>

        @include("layouts.nav")

        <div class="content">
            <div class="left-part">
                <h2 id="latestnews">Latest news</h2>
                <p id="fun-fact">Are you having fun, at least?<img src="{{ asset('assets/gifs/dollar.gif') }}" width="15px" height="18px"></p>

                <div class="new">
                    <p id="title">Departments</p>
                    <div class="text">
                        <ul>
                            <a href="">
                                <li>Discussion Forums</li>
                            </a>
                            <a href="">
                                <li>Discord Server</li>
                            </a>
                            <a href="">
                                <li>Mail Bag</li>
                            </a>
                            <a href="">
                                <li>Feeds & Services</li>
                            </a>
                        </ul>
                    </div>

                </div>

                <div class="new">
                    <p id="title">Departments</p>
                    <img src="{{ asset('/assets/gifs/flirt-kid.gif') }}">
                </div>

                <div class="new">
                    <p id="title">Departments</p>
                    <img src="{{ asset('/assets/gifs/britney.gif') }}">
                </div>

                <div class="new">
                    <p id="title">Departments</p>
                    <img src="{{ asset('/assets/gifs/courtney-love-hole.gif') }}">
                </div>
            </div>

            <div class="right-part">
                {{-- Page content goes here --}}
                @yield('content')
            </div>

        </div>

        @include("layouts.footer")

    </div>
</body>

</html>