<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="description" content="Full stack web development. A one stop shop for all your website needs. Grow your business with an elegant website. Come see why Quality is Everything at Workaholic Websites®.">
    <meta content="website builder, web developer, full stack, front end, back end" name="keywords">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Workaholic Websites | Superb Web Development">
    <meta itemprop="description" content="Full stack web development. A one stop shop for all your website needs. Grow your business with an elegant website. Come see why Quality is Everything at Workaholic Websites®.">
    <meta itemprop="image" content="https://workaholic-websites.com/images/index/code-large.jpeg">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://workaholic-websites.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Workaholic Websites | Superb Web Development">
    <meta property="og:description" content="Full stack web development. A one stop shop for all your website needs. Grow your business with an elegant website. Come see why Quality is Everything at Workaholic Websites®.">
    <meta property="og:image" content="https://workaholic-websites.com/images/index/code-large.jpeg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Workaholic Websites | Superb Web Development">
    <meta name="twitter:description" content="Full stack web development. A one stop shop for all your website needs. Grow your business with an elegant website. Come see why Quality is Everything at Workaholic Websites®.">
    <meta name="twitter:image" content="https://workaholic-websites.com/images/index/code-large.jpeg">

    <!-- Meta Tags Generated via http://heymeta.com -->
    
    <meta name="robots" content="index, follow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Workaholic Websites | Superb Web Development</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="preload" href="{{ asset('css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/app.css') }}"></noscript>
    <script>
        (function( w ){
	"use strict";
	// rel=preload support test
	if( !w.loadCSS ){
		w.loadCSS = function(){};
	}
	// define on the loadCSS obj
	var rp = loadCSS.relpreload = {};
	// rel=preload feature support test
	// runs once and returns a function for compat purposes
	rp.support = (function(){
		var ret;
		try {
			ret = w.document.createElement( "link" ).relList.supports( "preload" );
		} catch (e) {
			ret = false;
		}
		return function(){
			return ret;
		};
	})();

	// if preload isn't supported, get an asynchronous load by using a non-matching media attribute
	// then change that media back to its intended value on load
	rp.bindMediaToggle = function( link ){
		// remember existing media attr for ultimate state, or default to 'all'
		var finalMedia = link.media || "all";

		function enableStylesheet(){
			// unbind listeners
			if( link.addEventListener ){
				link.removeEventListener( "load", enableStylesheet );
			} else if( link.attachEvent ){
				link.detachEvent( "onload", enableStylesheet );
			}
			link.setAttribute( "onload", null ); 
			link.media = finalMedia;
		}

		// bind load handlers to enable media
		if( link.addEventListener ){
			link.addEventListener( "load", enableStylesheet );
		} else if( link.attachEvent ){
			link.attachEvent( "onload", enableStylesheet );
		}

		// Set rel and non-applicable media type to start an async request
		// note: timeout allows this to happen async to let rendering continue in IE
		setTimeout(function(){
			link.rel = "stylesheet";
			link.media = "only x";
		});
		// also enable media after 3 seconds,
		// which will catch very old browsers (android 2.x, old firefox) that don't support onload on link
		setTimeout( enableStylesheet, 3000 );
	};

	// loop through link elements in DOM
	rp.poly = function(){
		// double check this to prevent external calls from running
		if( rp.support() ){
			return;
		}
		var links = w.document.getElementsByTagName( "link" );
		for( var i = 0; i < links.length; i++ ){
			var link = links[ i ];
			// qualify links to those with rel=preload and as=style attrs
			if( link.rel === "preload" && link.getAttribute( "as" ) === "style" && !link.getAttribute( "data-loadcss" ) ){
				// prevent rerunning on link
				link.setAttribute( "data-loadcss", true );
				// bind listeners to toggle media back
				rp.bindMediaToggle( link );
			}
		}
	};

	// if unsupported, run the polyfill
	if( !rp.support() ){
		// run once at least
		rp.poly();

		// rerun poly on an interval until onload
		var run = w.setInterval( rp.poly, 500 );
		if( w.addEventListener ){
			w.addEventListener( "load", function(){
				rp.poly();
				w.clearInterval( run );
			} );
		} else if( w.attachEvent ){
			w.attachEvent( "onload", function(){
				rp.poly();
				w.clearInterval( run );
			} );
		}
	}


	// commonjs
	if( typeof exports !== "undefined" ){
		exports.loadCSS = loadCSS;
	}
	else {
		w.loadCSS = loadCSS;
	}
}( typeof global !== "undefined" ? global : this ) );
    </script>

    {{-- other css --}}
    <link href="{{ asset('css/other.css') }}" rel="stylesheet">

    {{-- footer and loader css --}}
    <link href="{{ asset('css/footerAndLoader.css') }}" rel="stylesheet" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136072054-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-136072054-1');
    </script>

    <link rel="shortcut icon" href="{{{ asset('images/logo.ico') }}}">

</head>
<body class="overflow-x pr-0">
<div class="loader">
    <div class="spinner-border spinner text-success" style="width: 6rem; height: 6rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<div class="la">
    <div class="home">
        @include('inc.navbar')
        @include('inc.messages')

        <div class="particles" id="particles-js" >

            <div class="row">
                <div class="text-white mt-4 col-10 offset-1">
                    <h1>Workaholic Websites</h1>
                    <h2><i>Where quality is everything</i></h2>
                </div>
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
                        <span class="icon-embed card-img-top extra-large text-success"></span>
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
                        <span class="icon-servers card-img-top extra-large text-primary"></span>
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
                        <span class="icon-paint-brush card-img-top extra-large text-logo-red"></span>
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
                        <span class="icon-wordpress card-img-top extra-large text-wordpress-color"></span>
                    </div>

                    <div class="card-body">
                        <h5>Drag and drop</h5>
                        <p>For those on a tight budget, creating/updating a Wordpress, Wix, Go Daddy, Squarespace, etc...</p>
                        <p><b>Starting as low as $300</b></p>
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
            <div id="slider" class="carousel carousel-index slide carousel-fade" data-ride="carousel" data-interval="3500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <picture>    
                            <source media="(max-width: 600px)" srcset="../images/multiple/SITH-mobile.PNG">
                            <img src="../images/multiple/SITH.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Standing in the hole screenshot">
                        </picture>    
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source media="(max-width: 600px)" srcset="../images/multiple/H2H-mobile.png">
                            <img src="../images/multiple/H2H.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Task list screenshot">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source media="(max-width: 600px)" srcset="../images/multiple/brown-trout-mobile.png">
                            <img src="../images/multiple/brown-trout.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Frat name generator screenshot">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source media="(max-width: 600px)" srcset="../images/multiple/YVCC-mobile.PNG">
                            <img src="../images/multiple/YVCC.PNG" class="d-block ml-auto mr-auto img-fluid" alt="Yampa Valley Chiropractic Center screenshot">
                        </picture>
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

        <div class="modal fade modal-padding" id="me" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="col-8 offset-4">
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
</div>     
    <script src="{{ asset('js/app.js') }}" async></script>
    <script>
        window.addEventListener('load', function(){
                particlesJS.load('particles-js', '../particles.json', function() {
            });
        });
    </script>
</body>
</html>