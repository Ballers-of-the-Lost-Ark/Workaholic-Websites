@extends('layouts.app')

@section('head')
    <meta name="description" content="Our high quality services include custom websites, back end development, front end development, full stack development, drag and drop, content creation, maintenance and website consulting.">
    <meta content="full stack, front end, back end, HTML, CSS, JavaScript, PHP, Laravel Bootstrap, Materialize, DevOps, Node.js" name="keywords">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Services">
    <meta itemprop="description" content="Our high quality services include custom websites, back end development, front end development, full stack development, drag and drop, content creation, maintenance and website consulting. ">
    <meta itemprop="image" content="">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://workaholic-websites.com/services">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Services">
    <meta property="og:description" content="Our high quality services include custom websites, back end development, front end development, full stack development, drag and drop, content creation, maintenance and website consulting. ">
    <meta property="og:image" content="">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Services">
    <meta name="twitter:description" content="Our high quality services include custom websites, back end development, front end development, full stack development, drag and drop, content creation, maintenance and website consulting. ">
    <meta name="twitter:image" content="">

    <!-- Meta Tags Generated via http://heymeta.com -->
@endsection

@section('content')
    <div class="mb-2">
        <h1>Services</h1>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <blockquote class="blockquote">
                <p>I specialize in server side (back end) development, specifically Laravel. This combined with front end javascript skills ensures a quality website every time. If you are a business seeking a web presence or an employer looking to hire, contact me <a href="/contact" class="underline">here</a>.</p>
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
                    <span class="icon-embed card-img-top extra-large text-success"></span>
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
                    <span class="icon-servers card-img-top extra-large text-primary"></span>
                </div>

                <div class="card-body">
                    <h5>Server side development</h5>
                    <p>Adding/updating parts to your website that aren't seen directly. For example plugins, widgets, mail functionality, google maps, forms, a social media feed, an online shop, admin privileges,    managing databases and general maintenance.</p>
                    <p><b>Prices vary</b></p>
                </div>
            </div>
        </div>

        {{-- Start front end development --}}
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card mb-4" data-toggle="modal" data-target="#frontend">
                <div class="ml-auto mr-auto mt-3">
                    <span class="icon-paint-brush card-img-top extra-large text-logo-red"></span>
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
                    <span class="icon-wordpress card-img-top extra-large text-wordpress-color"></span>
                </div>

                <div class="card-body">
                    <h5>Drag and drop</h5>
                    <p>For those on a tight budget, creating/updating a Wordpress, Wix, Go Daddy, Squarespace, etc. Includes adding plugins, google analytics, social media, rearranging items, animation, images, and general maintenance.</p>
                    <p><b>Starting as low as $300</b></p>
                </div>
            </div>
        </div>

        {{-- start content creation --}}
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card mb-4" data-toggle="modal" data-target="#drag-drop">
                <div class="ml-auto mr-auto mt-3">
                    <span class="icon-pencil card-img-top extra-large"></span>
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
                    <span class="icon-smile-o card-img-top extra-large text-warning"></span>
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
                    <p>Fortunately I know the ins and outs of creating a website and will guide you to a wise decision every time.</p>    
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
            <h6>DevOps/Linux Command Line</h6>
            <div class="mb-2 progress">
                <div class="progress-bar bg-dark progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
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
            <span class="icon-tools1 large"></span>
        </div>

        <div class="col-12 mt-2">
            <p>If your website is in disrepair, needs to be updated, and or was built in 2009 and hasn't been touched since <a href="/contact" class="underline">contact me.</a> <b>Prices vary greatly.</b></p>  
        </div>
    </div>
@endsection