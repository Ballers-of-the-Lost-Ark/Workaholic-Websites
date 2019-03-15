@extends('layouts.app')

@section('head')
    <meta name="description" content="Hi, my name is Nick Zinn. Besides website development I love to fly fishing, snowboard, golf, and play basketball. I'm a bit of a perfectionist and that carries into ... ">
    <meta content="self taught, web developer, full stack developer, handsome developer, nerd" name="keywords">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="About ">
    <meta itemprop="description" content="Hi, my name is Nick Zinn. Besides website development I love to fly fishing, snowboard, golf, and play basketball. I'm a bit of a perfectionist and that carries into ... ">
    <meta itemprop="image" content="https://workaholic-websites.com/images/multiple/me-extra-large.jpg">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://workaholic-websites.com/about">
    <meta property="og:type" content="website">
    <meta property="og:title" content="About ">
    <meta property="og:description" content="Hi, my name is Nick Zinn. Besides website development I love to fly fishing, snowboard, golf, and play basketball. I'm a bit of a perfectionist and that carries into ... ">
    <meta property="og:image" content="https://workaholic-websites.com/images/multiple/me-extra-large.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="About ">
    <meta name="twitter:description" content="Hi, my name is Nick Zinn. Besides website development I love to fly fishing, snowboard, golf, and play basketball. I'm a bit of a perfectionist and that carries into ... ">
    <meta name="twitter:image" content="https://workaholic-websites.com/images/multiple/me-extra-large.jpg">

    <!-- Meta Tags Generated via http://heymeta.com -->
@endsection

@section('content')
    <div class="mb-4">
        <h1 class="mb-4">About Me</h1>
    </div>

    <div class="row">
        <div class="col-12 col-lg-4 w-100">
            {{-- start carousel --}}
            <div class="images h-100">
                <div id="carouselExampleControls" class="carousel carousel-about slide pb-4" data-ride="carousel" data-interval="4500">
                    <div class="carousel-inner">
                        <div class="carousel-item active colo">
                            <img src="../images/about/colorado-river.jpg" class="img-fluid d-block w-100 photo" alt="Nick holding a fish" data-target="#me" data-toggle="tooltip" data-placement="left" title="One handsome web developer">
                        </div>
                        <div class="carousel-item">
                            <picture>
                                <source media="(max-width: 600px)" srcset="../images/multiple/me-mobile.jpg">  
                                <source media="(max-width: 850px)" srcset="../images/multiple/me-medium.jpg"> 
                                <source media="(max-width: 1300px)" srcset="../images/multiple/me-large.jpg">
                                <source media="(max-width: 2500px)" srcset="../images/multiple/me-extra-large.jpg">  

                                <img src="../images/multiple/me.jpg" alt="One handsome web developer" class="img-fluid d-block w-100 photo" data-toggle="modal" data-target="#me" data-toggle="tooltip" data-placement="left" title="One handsome web developer"> 
                            </picture> 
                        </div>
                        <div class="carousel-item">
                            <picture>
                                <source media="(max-width: 600px)" srcset="../images/about/cheeseman-mobile.jpg">  
                                <source media="(max-width: 850px)" srcset="../images/about/cheeseman-medium.jpg"> 
                                <source media="(max-width: 1300px)" srcset="../images/about/cheeseman-large.jpg">
                                <source media="(max-width: 2500px)" srcset="../images/about/cheeseman-extra-large.jpg">  

                                <img src="../images/about/cheeseman.jpg" class=" img-fluidd-block w-100 photo" alt="Nick holding another fish" data-target="#me" data-toggle="tooltip" data-placement="left" title="One handsome web developer">
                            </picture>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 offset-lg-1">
            <div class="about-me pl-2 pr-2">
                <h4><b>Nick Zinn</b> the
                    <span class="txt-type" data-wait="2000" data-words='["Developer", "Owner", "Self taught developer", "Fly fisherman"]'></span>
                </h4> 
                <p>Hello folks, my name is Nick Zinn. I live in the great state of Colorado. Besides programming, learning about quantum mechanics, and discussing economics. I'm a regular guy; I love to fly fish, golf, workout, snowboard, and play basketball. Before web development I worked manual labor (labour for our friends across the pond) 10 hours a day, 5 days a week. It was a great time; I built character and developed a work ethic. Which I still carry with me to this day. As much as I loved to construct things and <a href="/contact" class="underline">talk to clients</a> it was not a long term career. Fast forward 9 months and I have learned two programming languages; JavaScript and PHP (specifically Laravel). Along with HTML, CSS, Bootstrap, Materialize, NPM, GIT, Github, SSH and a bit of Node.js. Everything you need to create a website from scratch. Hablo español un poco, pero soy un gringo. Por ejemplo, puedo tener otro cerveza por favor. O ¿ qué pasa wei ? If you're confused <a href="/contact" class="underline">contact your local translator.</a></p>
            </div>
        </div>
    </div>

@endsection