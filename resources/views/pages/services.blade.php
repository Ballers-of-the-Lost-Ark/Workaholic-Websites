@extends('layouts.app')

@section('head')
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="mb-2">
        <h1>Services</h1>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <blockquote class="blockquote">
                <p>I specialize in server side (back end) development, specifically Laravel. This combined with front end javascript skills ensures a quality website everytime. If you are a business seeking a web presence or an employer looking to hire, contact me <a href="/contact" class="underline">here</a>.</p>
            </blockquote>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-12 mb-3">
            <h2 class="text-center">Services Include</h2>
        </div>
        {{-- Start custom code --}}
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card mb-4" data-toggle="modal" data-target="#custom-code">
                <div class="ml-auto mr-auto mt-3">
                    <i class="fas fa-code card-img-top extra-large"></i>
                </div>

                <div class="card-body">
                    <h5>Custom websites</h5>
                    <p>A fully customizable, one of a kind website. Examples include ecommerce, consultation, blogs, and brochures.</p>
                    <p><b>Starting at $1000</b></p>
                </div>
            </div>
        </div>

        {{-- Start back end development --}}
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card mb-4" data-toggle="modal" data-target="#backend">
                <div class="ml-auto mr-auto mt-3">
                    <i class="fas fa-server card-img-top extra-large"></i>
                </div>

                <div class="card-body">
                    <h5>Server side development</h5>
                    <p>Adding/updating parts to your website that aren't seen directly. For example plugins, widgets, mail functionality, google maps, forms, a social media feed, an online shop, admin privledges,    managing databases and general maintenance.</p>
                    <p><b>Prices vary</b></p>
                </div>
            </div>
        </div>

        {{-- Start front end development --}}
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card mb-4" data-toggle="modal" data-target="#frontend">
                <div class="ml-auto mr-auto mt-3">
                    <i class="fas fa-paint-brush card-img-top extra-large"></i>
                </div>

                <div class="card-body">
                    <h5>Front end development</h5>
                    <p>Updating/creating the visible section of your website. Examples encompass a navigation bar, loading screen, buttons, dropdowns, notifications, and icons.</p>
                    <p><b>Prices vary</b></p>
                </div>
            </div>
        </div>

        {{-- start drag and drop --}}
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card mb-4" data-toggle="modal" data-target="#drag-drop">
                <div class="ml-auto mr-auto mt-3">
                    <i class="fab fa-wordpress card-img-top extra-large"></i>
                </div>

                <div class="card-body">
                    <h5>Drag and drop</h5>
                    <p>For those on a tight budget, creating/updating a Wordpress, Wix, Go Daddy, Squarespace, etc. Includes adding plugins, google analytics, social media, rearranging items, animation, images, and general maintenance.</p>
                    <p><b>Starting as low as $250</b></p>
                </div>
            </div>
        </div>

        {{-- start content creation --}}
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card mb-4" data-toggle="modal" data-target="#drag-drop">
                <div class="ml-auto mr-auto mt-3">
                    <i class="fas fa-pencil-alt card-img-top extra-large"></i>
                </div>

                <div class="card-body">
                    <h5>Content creation</h5>
                    <p>Writing and organizing content. This includes photos, paragraphs, logos, themes, colors, and anything else that goes into a website.</p>
                    <p><b>Prices vary</b></p>
                </div>
            </div>
        </div>

        {{-- start consulting --}}
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card mb-4" data-toggle="modal" data-target="#drag-drop">
                <div class="ml-auto mr-auto mt-3">
                    <i class="far fa-smile card-img-top extra-large"></i>
                </div>

                <div class="card-body">
                    <h5>Guidance/Advice</h5>
                    <p>There's a lot of choices to make when creating a website. To name a few:</p>
                        <ul>
                            <li>Who's going to host it ?</li>
                            <li>What type of hosting do you need (shared, VPS, dedicated servers) ?</li>
                            <li>How is it going to be built (drag and drop, developer {like yours truly}, template) ?</li>
                            <li>If you need to send emails what email server is needed (SparkPost, Amazon SES, Mailgun, MailGet Bolt) ?</li>
                            <li>What's it going to look like (theme, color scheme, fonts, images) ?</li>
                            <li>If you need a database where do the encrypted backups go (Dropbox, Google Drive, Box, OneDrive, MediaFire, external server) ?</li>
                            <li>How to transfer a domain ?</li>
                            <li>What's a fair price for a domain ?</li>
                        </ul>
                    <p>Fortunately I know the ins and outs of creating a website and will guide you to a wise descion everytime.</p>    
                    <p><b>Free with every website</b></p>
                </div>
            </div>
        </div>

    </div>
    
   {{-- start progress --}}
   <div class="text-center mb-1">
        <h2>Skills</h2>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6">
            <h6>HTML</h6>
            <div class="mb-2 progress">
                <div class="progress-bar html-orange progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h6>CSS</h6>
            <div class="mb-2 progress">
                <div class="progress-bar css-blue progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h6>JavaScript</h6>
            <div class="mb-2 progress">
                <div class="progress-bar javascript-gold progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h6>PHP (Laravel)</h6>
            <div class="mb-2 progress">
                <div class="progress-bar php progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h6>Bootstrap</h6>
            <div class="mb-2 progress">
                <div class="progress-bar bootstrap progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">85%</div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h6>Materialize</h6>
            <div class="mb-2 progress">
                <div class="progress-bar materialize progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h6>Linux Command Line</h6>
            <div class="mb-2 progress">
                <div class="progress-bar bg-dark progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h6>Node.js</h6>
            <div class="mb-5 progress">
                <div class="progress-bar node progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">45%</div>
            </div>
        </div>
    </div>


    {{-- Start maintenance --}}
    <div class="text-center mb-1">
        <h2>Maintenance/Rescue</h2>
    </div>

    <div class="row mt-3">
        <div class="ml-auto mr-auto mb-1">
            <i class="fas fa-tools large"></i>
        </div>

        <div class="col-12 mt-2">
            <p>If your website is in disrepair, needs to be updated, and or was built in 2009 and hasn't been touched since <a href="/contact" class="underline">contact me.</a> <b>Prices vary greatly.</b></p>  
        </div>
    </div>
@endsection