@extends('layouts.app')

@section('head')
    <style>
        fas{
            font-size: 1.15rem;
        }
    </style>

    <meta name="description" content="From professional websites to timely responses and 24/7 availability. Come see why Quality is Everything and contact a pro full stack web developer.">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Contact">
    <meta itemprop="description" content="From professional websites to timely responses and 24/7 availability. Come see why Quality is Everything and contact a pro full stack web developer.">
    <meta content="professional, quality, contact, email, phone number" name="keywords">
    <meta itemprop="image" content="">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://workaholic-websites.com/contact">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Contact">
    <meta property="og:description" content="From professional websites to timely responses and 24/7 availability. Come see why Quality is Everything and contact a pro full stack web developer.">
    <meta property="og:image" content="">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact">
    <meta name="twitter:description" content="From professional websites to timely responses and 24/7 availability. Come see why Quality is Everything and contact a pro full stack web developer.">
    <meta name="twitter:image" content="">

    <!-- Meta Tags Generated via http://heymeta.com -->
@endsection

@section('content')
    <h1 class="mb-4">Contact Me</h1>

    <div class="mb-3">
        <i class="fas fa-phone d-inline"></i> <a href="tel:720-556-6704" class="ml-2">720-556-6704</a>
    </div>

    <p><b>OR</b></p>

    {!! Form::open(['action' => ['ContactController@contact'], 'method' => 'Post']) !!}
        <div class="form-row">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    {{Form::label('name', 'Name', ['id' =>  'name-label'])}}
                    <p class="form-text mb-2 d-inline text-danger">*</p>
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'John Doe', 'required' => 'yes'])}}
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    {{Form::label('email', 'Email')}}
                    <p class="form-text mb-2 d-inline text-danger">*</p>
                    {{Form::email('email', '', ['placeholder' => 'email@gmail.com', 'class' => 'form-control', 'required' => 'yes'])}}
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    {{Form::label('text', 'Message')}}
                    {{Form::textarea('text', '', ['placeholder' => 'A brief message (optional)', 'class' => 'form-control'])}}
                </div>
            </div>

            {{Form::hidden('date', \Carbon\Carbon::now())}}
            
            <div class="col-auto">
                {{ Form::submit('Let\'s work together', ['class' => 'btn btn-primary shadow'])}}
            </div>
        </div>
    {!! Form::close() !!}
@endsection