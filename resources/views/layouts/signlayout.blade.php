<!DOCTYPE HTML>
<html>

<head>
    <title>Hub</title>
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
        @include("layouts.nav")

        <div class="content">
            {{-- Page content goes here --}}
            @yield('content')

        </div>

        @include("layouts.footer")
    </div>
</body>

</html>