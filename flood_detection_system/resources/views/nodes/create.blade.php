@extends('layouts.master')
@section('content')
<!-- Intro Header -->
<div class="container-fluid" style="background-color:silver;padding:20px">
        <div class="col-lg-10 col-lg-offset-1">
            {!! Form::open(['action' => 'NodesController@store', 'method' => 'POST']) !!}
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('name','Station name:')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter the name of the station'])}}
                    </div>
                </div>                
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('river','River:')}}
                        </div>
                        <div class="col-sm-8">
                        {{Form::text('river', '', ['class' => 'form-control', 'placeholder' => 'River'])}}
                    </div>
                </div>
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('alert_level','Alert Level:')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('alert_level', '', ['class' => 'form-control', 'placeholder' => 'Enter the alert level'])}}
                    </div>
                </div>                    
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('minor_flood_level','Minor Flood Level (m):')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('minor_flood_level', '', ['class' => 'form-control', 'placeholder' => 'Enter the alert level'])}}
                    </div>
                </div>                    
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('major_flood_level','Major Flood Level (m):')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('major_flood_level', '', ['class' => 'form-control', 'placeholder' => 'Enter the minor fllood level'])}}
                    </div>
                </div>                    
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('current_water_level','Current Water Level (m):')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text(' ', '', ['class' => 'form-control', 'placeholder' => 'Enter the current level'])}}
                    </div>
                </div>  
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}                  
            {!! Form::close() !!}
        </div>
</div>
@endsection