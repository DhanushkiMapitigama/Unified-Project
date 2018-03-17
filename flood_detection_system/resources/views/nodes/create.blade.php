@extends('layouts.master')
@section('content')
<img src="{{URL::asset('/img/header.jpg')}}" class="full-width">

<!-- Intro Header -->
<div class="container-fluid" style="background-color:silver;">
        <div class="col-lg-10 col-lg-offset-1">
            {!! Form::open(['action' => 'NodesController@store', 'method' => 'POST']) !!}
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('name','Station name:')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter the name of the station'])}}
                    </div>
                    <div class="col-sm-4" style="text-align:right;">
                    {{Form::label('river','River')}}
                    </div>
                    <div class="col-sm-8">
                    {{Form::text('river', '', ['class' => 'form-control', 'placeholder' => 'River'])}}
                    </div>
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('alert_level','Alert Level')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('alert_level', '', ['class' => 'form-control', 'placeholder' => 'Enter the alert level'])}}
                    </div>
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('minor_flood_level','Minor Flood Level (m)')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('minor_flood_level', '', ['class' => 'form-control', 'placeholder' => 'Enter the alert level'])}}
                    </div>
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('major_flood_level','Major Flood Level (m)')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('major_flood_level', '', ['class' => 'form-control', 'placeholder' => 'Enter the minor fllood level'])}}
                    </div>
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('current_water_level','Current Water Level (m)')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('current_water_level', '', ['class' => 'form-control', 'placeholder' => 'Enter the current level'])}}
                    </div>
            {!! Form::close() !!}
        </div>
</div>
@endsection