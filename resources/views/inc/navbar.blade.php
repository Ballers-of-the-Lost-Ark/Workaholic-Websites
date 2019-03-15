<nav class="navbar navbar-expand-sm mb-4 @if (@isset($index))
    see-through
@else
    navbar-dark
@endif">
    <div class="container">
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
            <img src="../images/logo.png" alt="Workaholic Websites logo">
        </a> --}}
        <button class="navbar-toggler navbar-light @isset($index)
            bg-light
        @endisset"
        type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span id="nav-icon" class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/portfolio">My work</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
            </ul>
        </div>
    </div>
</nav>