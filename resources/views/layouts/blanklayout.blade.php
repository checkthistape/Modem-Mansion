<!DOCTYPE HTML>
<html>

<head>
    <title>Modem Mansion Forum ~ @yield('title')</title>
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
    <div class="wrapper">
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
            {{-- Page content goes here --}}
            @yield('content')

        </div>

        @include("layouts.footer")
    </div>
</body>

</html>