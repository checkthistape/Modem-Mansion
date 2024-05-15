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
            ReadingFromCookie();

        };
    </script>

</head>

<body>

    <div class="wrapper" id="wrapper">
        <div class="wcag-bar">
            <div class="left-block">
                <div class=""><img src="/assets/icons/top-icon.png" onclick="toTheMoon()" id="topIc" alt="Go to the top"></div>
                <div class=""><img src="/assets/icons/alarge-icon.png" onclick="setFontSizeCookie('150%')" id="largeIc" alt="Make font size larger"></div>
                <div class=""><img src="/assets/icons/asmall-icon.png" onclick="setFontSizeCookie('100%')" id="smallIc" alt="Make font size normal"></div>
            </div>

            <div class="right-block">
            <div class=""><img src="/assets/icons/sun-icon.png" onclick="day()" id="dayIc"></div>
                <div class=""><img src="/assets/icons/moon-icon.png" onclick="night()" id="nightIc"></div>
            </div>


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
                            <a href="/underconstruction">
                                <li>Discussion Forums</li>
                            </a>
                            <a target="_blank" href="https://discord.gg/xjQ8fBmww9">
                                <li>Discord Server</li>
                            </a>
                            <a href="/underconstruction">
                                <li>Mail Bag</li>
                            </a>
                            <a href="/underconstruction">
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