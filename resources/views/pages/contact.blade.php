@extends('layouts.app')

@section('head')
    <style>
        fas{
            font-size: 1.15rem;
        }
    </style>
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