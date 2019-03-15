@extends('layouts.app')

@section('head')
    <meta name="description" content="Beautiful examples of what Workaholic Websites™ can do for you. Work includes front end, back end, and full stack web development. Contact us to learn more.">
    <meta content="business CRUD, full stack, HTML, CSS, JavaScript, PHP, Laravel, Bootstrap, Materialize, portfolio" name="keywords">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="My Work">
    <meta itemprop="description" content="Beautiful examples of what Workaholic Websites™ can do for you. Work includes front end, back end, and full stack web development. Contact us to learn more.">
    <meta itemprop="image" content="https://workaholic-websites.com/images/multiple/H2H.PNG">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://workaholic-websites.com/portfolio">
    <meta property="og:type" content="website">
    <meta property="og:title" content="My Work">
    <meta property="og:description" content="Beautiful examples of what Workaholic Websites™ can do for you. Work includes front end, back end, and full stack web development. Contact us to learn more.">
    <meta property="og:image" content="https://workaholic-websites.com/images/multiple/H2H.PNG">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="My Work">
    <meta name="twitter:description" content="Beautiful examples of what Workaholic Websites™ can do for you. Work includes front end, back end, and full stack web development. Contact us to learn more.">
    <meta name="twitter:image" content="https://workaholic-websites.com/images/multiple/H2H.PNG">

    <!-- Meta Tags Generated via http://heymeta.com -->
@endsection

@section('content')
    <div class="mb-3">
        <h1>My Work</h1>
    </div>

    <div class="row overflow-x">
        {{-- start standing in the hole--}}
        <div class="col-12 col-md-6">
            <div class="card portfolio-card mb-4" data-toggle="modal" data-target="#sith">
                <picture>    
                    <source media="(max-width: 600px)" srcset="../images/multiple/SITH-mobile.PNG">
                    <img src="../images/multiple/SITH.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Standing in the hole screenshot">
                </picture>

                <div class="card-body">
                    <h5>Standing in the hole</h5>
                    <p>My personal fly fishing blog. Contains a multi level admin system, CRUD (Create, Read, Update, Delete) functionality, search capability, and a login/register structure. (For the technical; custom admin middleware, image compression, Laravel and Bootstrap.)</p>  
                    
                    <a href="http://www.standing-in-the-hole.com/" target="_blank" class="btn btn-outline-primary">View site</a>

                    <a href="https://github.com/Ballers-of-the-Lost-Ark/SITHLA" target="_blank" class="btn btn-outline-success ml-3">View code</a> 
                </div>
            </div>
        </div>

        {{-- start here2help --}}
        <div class="col-12 col-md-6">
            <div class="card portfolio-card mb-3">
                <picture>
                    <source media="(max-width: 600px)" srcset="../images/multiple/H2H-mobile.png">
                    <img src="../images/multiple/H2H.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Task list screenshot">
                </picture>

                <div class="card-body">
                    <h5>Here2Help Plumbing</h5>
                    <p>A custom local plumbing website I designed and coded. (For the technical; pure css no libraries, custom animation and JavaScript.)</p>
                    <a href="https://www.here2helpplumbing.com/" target="_blank" class="btn btn-outline-primary">View site</a>
                </div>

            </div>
        </div>

        {{-- start trout that life --}}
        <div class="col-12 col-md-6">
            <div class="card portfolio-card mb-3">
                <picture>
                    <source media="(max-width: 600px)" srcset="../images/multiple/brown-trout-mobile.png">
                    <img src="../images/multiple/brown-trout.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Frat name generator screenshot">
                </picture>

                <div class="card-body">
                    <h5>Trout That Life Anglers</h5>
                    <p>A simple one page site for a fictional fly shop. (For the technical; pure css. Inspired by <a href="https://learn.freecodecamp.org/responsive-web-design/responsive-web-design-projects/build-a-product-landing-page/" target="_blank">freeCodeCamp</a>.)</p>

                    <a href="https://zinn-for-the-win-portfolio.000webhostapp.com/" target="_blank" class="btn btn-outline-primary">View site</a>

                    <a href="https://github.com/Ballers-of-the-Lost-Ark/Trout-that-life-fly-fishing" target="_blank" class="btn btn-outline-success ml-3">View code</a>                    
                </div>

            </div>
        </div>

        {{-- start frat name generator --}}
        <div class="col-12 col-md-6">
            <div class="card portfolio-card mb-3" data-toggle="modal" data-target="#custom">
                <picture>
                    <source media="(max-width: 600px)" srcset="../images/multiple/frat-name-generator-mobile.png">
                    <img src="../images/multiple/frat-name-generator.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Frat name generator screenshot">
                </picture>

                <div class="card-body">
                    <h5>Fraternity name generator</h5>
                    <p>A fun little project that generates fraternity and or sororitiy names. Saves the names into 
                    the browser. Allows for editing, customization, and deletion. (For the technical; pure JavaScript, CRUD functionality, and created using Materialize.)</p>

                    <a href="http://frat-name-generator.co/" target="_blank" class="btn btn-outline-primary">View site</a>

                    <a href="https://github.com/Ballers-of-the-Lost-Ark/Frat-Name-Generator" target="_blank" class="btn btn-outline-success ml-3">View code</a>
                </div>
            </div>
        </div>

        <div class="ml-auto mr-auto pl-3 pr-3 text-center">
            <h5>If you like what you see and or have questions <a href="/contact" class="underline">contact me</a> or visit my <a href="https://github.com/Ballers-of-the-Lost-Ark" class="underline" target="_blank">Github.</a></h5>
        </div>
    </div>
@endsection