<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Workaholic Websites</title>

    <!-- Fonts -->
    {{-- robot condensed bold --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
    {{-- roboto condensed --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- home css --}}
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    {{-- footer css --}}
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css">
    
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body class="overflow-x">
    <div class="home" id="particles-js">
        @include('inc.navbar')
        @include('inc.messages')

        <div class="row">
            <div class="text-white mt-4 col-10 offset-1">
                <h1>Workaholic Websites</h1>
                <h2><i>Where quality is everything</i></h2>
            </div>
        </div>
    </div>

    <div class="triangle-down mb-4"></div>

    {{-- start services --}}
    <div class="container">
        <div class="text-center">
            <h3 class="underline cursor"><a href="/services">Services</a></h3>
            <p>From custom code to drag and drop</p>
        </div>  

        <div class="row mb-5">
            {{-- Start custom code --}}
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card cursor card-service mb-4" data-toggle="modal" data-target="#custom-code">
                    <div class="ml-auto mr-auto mt-3">
                        <i class="fas fa-code card-img-top extra-large"></i>
                    </div>

                    <div class="card-body">
                        <h5>Custom websites</h5>
                        <p>A fully customizable, one of a kind website...</p>
                        <p><b>Starting at $1000</b></p>
                    </div>
                </div>
            </div>

            {{-- Start back end development --}}
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card cursor card-service mb-4" data-toggle="modal" data-target="#backend">
                    <div class="ml-auto mr-auto mt-3">
                        <i class="fas fa-server card-img-top extra-large"></i>
                    </div>

                    <div class="card-body">
                        <h5>Back end development</h5>
                        <p>Adding/updating parts to your website that aren't seen directly...</p>
                        <p><b>Prices vary depending on job</b></p>
                    </div>
                </div>
            </div>

            {{-- Start front end development --}}
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card cursor card-service mb-4" data-toggle="modal" data-target="#frontend">
                    <div class="ml-auto mr-auto mt-3">
                        <i class="fas fa-paint-brush card-img-top extra-large"></i>
                    </div>

                    <div class="card-body">
                        <h5>Front end development</h5>
                        <p>Updating/creating the visible section of your website...</p>
                        <p><b>Prices vary depending on the job</b></p>
                    </div>
                </div>
            </div>

            {{-- start drag and drop --}}
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card cursor card-service mb-4" data-toggle="modal" data-target="#drag-drop">
                    <div class="ml-auto mr-auto mt-3">
                        <i class="fab fa-wordpress card-img-top extra-large"></i>
                    </div>

                    <div class="card-body">
                        <h5>Drag and drop</h5>
                        <p>For those on a tight budget, creating/updating a Wordpress, Wix, Go Daddy, Squarespace, etc...</p>
                        <p><b>Starting as low as $250</b></p>
                    </div>
                </div>
            </div>

             <div class="ml-auto mr-auto">
                <a href="/services" class="btn btn-outline-info">View all services</a>
            </div>
        </div> 


        {{-- Start portfolio --}}
        <div class="text-center mb-4">
            <h3 class="underline"><a href="/portfolio">My work</a></h3>
        </div> 

        {{-- start carousel --}}
        <div class="carousel mb-4">
            <div id="slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/multiple/standing_in_the_hole.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Standing in the hole screenshot">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/multiple/here2help.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Task list screenshot">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/multiple/brown-trout.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Frat name generator screenshot">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/multiple/frat-name-generator.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Frat name generator screenshot">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="ml-auto mr-auto">
                <a href="/portfolio" class="btn btn-outline-info">More of my work</a>
            </div>
        </div>

        
        {{-- Start about--}}
        <div class="text-center mt-5 mb-3">
            <h3 class="underline"><a href="/about">About me</a></h3>
        </div>

            <div class="text-center ml-auto mr-auto mb-3">
                <picture>
                    <source media="(max-width: 600px)" srcset="../images/multiple/me-mobile.jpg">  
                    <source media="(max-width: 850px)" srcset="../images/multiple/me-medium.jpg"> 
                    <source media="(max-width: 1300px)" srcset="../images/multiple/me-large.jpg">
                    <source media="(max-width: 2500px)" srcset="../images/multiple/me-extra-large.jpg">  

                    <img src="../images/multiple/me.jpg" alt="One handsome web developer" class="img-fluid photo cursor" data-toggle="modal" data-target="#me" data-toggle="tooltip" data-placement="left" title="One handsome web developer"> 
                </picture> 
            </div>

        <h4><b>Nick Zinn</b> the
            <span class="txt-type" data-wait="2000" data-words='["Developer", "Owner", "Self taught developer", "Fly fisherman"]'></span>
        </h4> 
        <p>Hello folks, my name is Nick Zinn. I live in the great state of Colorado. Besides programming, learning about quantum mechanics, and discussing economics. I'm a regular guy, I love to fly fish, golf, workout ... <a href="/about" class="btn btn-outline-info ml-1 mr-2">Read more</a>(Hablo español un poco, pero soy un gringo. Por ejemplo, puedo tener otro cerveza por favor.)</p>

        <div class="modal fade" id="me" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="col-7 offset-4">
                        <button type="button" class="close mt-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-header">
                    <div class="row">
                        <div class="col-12">
                            <p>That's one handsome web developer. I was "reely" excited about this fish.</p> 
                        </div>

                        <div class="col-12">
                            <a href="/about" class="btn btn-small btn-outline-primary" role="button">Learn more</a> 
                        </div>
                    </div> 
                </div>    
                <div class="modal-body">
                    <picture class="ml-auto mr-auto">
                        <source media="(max-width: 600px)" srcset="../images/multiple/me-mobile.jpg">  
                        <source media="(max-width: 850px)" srcset="../images/multiple/me-medium.jpg"> 
                        <source media="(max-width: 1300px)" srcset="../images/multiple/me-large.jpg">
                        <source media="(max-width: 2500px)" srcset="../images/multiple/me-extra-large.jpg">  

                        <img src="../images/multiple/me.jpg" alt="One sexy web developer" class="img-fluid"  data-toggle="tooltip" data-placement="left" title="One handsome web developer"> 
                    </picture>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>    
   
    @include('inc.footer')

    <script src="{{asset('js/particles.js')}}"></script>
    <script>
        particlesJS.load('particles-js', '../particles.json', function() {
        });
    </script>
    <script src="{{ asset('js/service-redirect.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/typeWriter.js') }}"></script>
    <script src="{{ asset('js/footerStyle.js') }}"></script>
</body>
</html>