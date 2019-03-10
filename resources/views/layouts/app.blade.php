<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}}</title>

    <!-- Fonts -->
    {{-- robot condensed bold --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
    {{-- roboto condensed --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- footer and loader css --}}
    <link href="{{ asset('css/footerAndLoader.css') }}" rel="stylesheet" type="text/css">

    
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">

    @yield('head')
</head>
<body class="overflow-x">
    @include('inc.navbar')
    @include('inc.messages')

    <div class="loader">
        <div class="spinner-border spinner text-success" style="width: 6rem; height: 6rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="la">
        <main class="py-4 container">
            @yield('content')     
        </main>
        
        @include('inc.footer')
    </div>
   
    @yield('script')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/footerAndLoader.js') }}"></script>
</body>
 
</html>
