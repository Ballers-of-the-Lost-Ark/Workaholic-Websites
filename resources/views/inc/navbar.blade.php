<nav class="navbar navbar-expand-sm mb-4 @if (@isset($index))
    see-through
@else
    navbar-dark
@endif">
    <div class="container">
        {{-- 
        TODO
            Add logo
        <a class="navbar-brand" href="{{ url('/') }}">
            Workaholic Websites
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
                <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/portfolio">My work</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/about">About</a></li>
            </ul>
        </div>
    </div>
</nav>