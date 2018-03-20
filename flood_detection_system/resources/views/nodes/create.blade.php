@extends('layouts.master')
@section('content')
<!-- Intro Header -->
<div class="container-fluid" style="background-color:silver;padding:20px">
        <div class="col-lg-10 col-lg-offset-1">
            {!! Form::open(['action' => 'NodesController@store', 'method' => 'POST']) !!}
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('station_name','Station name:')}}
                    </div>
                    <div class="col-sm-5">
                        {{Form::text('station_name', '', ['class' => 'form-control', 'placeholder' => 'Enter the name of the station'])}}
                    </div>
                </div>   
                <br>             
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('river','River:')}}
                        </div>
                        <div class="col-sm-5">
                        {{Form::text('river', '', ['class' => 'form-control', 'placeholder' => 'River'])}}
                    </div>
                </div>
                <br>
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('alert_level','Alert Level:')}}
                    </div>
                    <div class="col-sm-5">
                        {{Form::text('alert_level', '', ['class' => 'form-control', 'placeholder' => 'Enter the alert level'])}}
                    </div>
                </div> 
                <br>                   
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('minor_level','Minor Flood Level (m):')}}
                    </div>
                    <div class="col-sm-5">
                        {{Form::text('minor_level', '', ['class' => 'form-control', 'placeholder' => 'Enter the alert level'])}}
                    </div>
                </div>    
                <br>                
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('major_level','Major Flood Level (m):')}}
                    </div>
                    <div class="col-sm-5">
                        {{Form::text('major_level', '', ['class' => 'form-control', 'placeholder' => 'Enter the minor fllood level'])}}
                    </div>
                </div>
                <br>                   
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('current_level','Current Water Level (m):')}}
                    </div>
                    <div class="col-sm-5">
                        {{Form::text('current_level', '', ['class' => 'form-control', 'placeholder' => 'Enter the current level'])}}
                    </div>
                </div>  
                <hr>
                {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}                  
            {!! Form::close() !!}
        </div>
</div>
@endsection