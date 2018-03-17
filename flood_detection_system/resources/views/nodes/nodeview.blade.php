@extends('layouts.master')
@section('content')
<img src="{{URL::asset('/img/header.jpg')}}" class="full-width">

<!-- Intro Header -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="jumbotron">
                {!! Form::open(['action' => 'NodesController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('name','Name')}}
                        {{Form::label('river','River')}}
                        {{Form::label('alert_level','Alert Level')}}
                        {{Form::label('minor_flood_level','Minor Flood Level (m)')}}
                        {{Form::label('major_flood_level','Major Flood Level (m)')}}
                        {{Form::label('major_flood_level','Major Flood Level (m)')}}
                        {{Form::label('current_water_level','Current Water Level (m)')}}
                        {{Form::label('condition','Condition')}}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
