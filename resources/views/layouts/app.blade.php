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
    {{-- footer css --}}
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css">
    
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    @yield('head')
</head>
<body>
    @include('inc.navBar')
    @include('inc.messages')
    <main class="py-4 container">
        @yield('content')     
    </main>
    @include('inc.footer')
   
    @yield('script')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/footerStyle.js') }}"></script>
</body>
 
</html>
