@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <h1>My Work</h1>
    </div>

    <div class="row overflow-x">
        {{-- start standing in the hole--}}
        <div class="col-12 col-md-6">
            <div class="card portfolio-card mb-4" data-toggle="modal" data-target="#sith">
                <img class="card-img-top" src="../images/multiple/standing_in_the_hole.PNG" alt="Standing in the hole small screenshot">

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
                <img class="card-img-top" src="../images/multiple/here2help.PNG" alt="Here2help Plumbing small screenshot">

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
                <img class="card-img-top" src="../images/multiple/brown-trout.PNG" alt="Trout That Life Anglers small screenshot">

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
                <img class="card-img-top" src="../images/multiple/frat-name-generator.PNG" alt="Frat name generator small screenshot">

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