@extends('layouts.master')
@section('content')

<div class="container-fluid" style="background-color:silver;padding:20px">
        <div class="col-lg-10 col-lg-offset-1">
            {!! Form::open(['action' => ['NodesController@update',$node->id], 'method' => 'POST','files'=> true, 'enctype' => 'multipart/form-data']) !!}
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('station_name','Station name:')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('station_name', $node->station_name , ['class' => 'form-control', 'placeholder' => 'Enter the name of the station'])}}
                    </div>
                </div>                
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('river','River:')}}
                        </div>
                        <div class="col-sm-8">
                        {{Form::text('river', $node->river, ['class' => 'form-control', 'placeholder' => 'River'])}}
                    </div>
                </div>
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('alert_level','Alert Level:')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('alert_level', $node->alert_level , ['class' => 'form-control', 'placeholder' => 'Enter the alert level'])}}
                    </div>
                </div>                    
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('minor_level','Minor Flood Level (m):')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('minor_level', $node->minor_level , ['class' => 'form-control', 'placeholder' => 'Enter the alert level'])}}
                    </div>
                </div>                    
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('major_level','Major Flood Level (m):')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('major_level', $node->major_level , ['class' => 'form-control', 'placeholder' => 'Enter the minor fllood level'])}}
                    </div>
                </div>                    
                <div style="padding:20px;">
                    <div class="col-sm-4" style="text-align:right;">
                        {{Form::label('current_level','Current Water Level (m):')}}
                    </div>
                    <div class="col-sm-8">
                        {{Form::text('current_level', $node->current_level , ['class' => 'form-control', 'placeholder' => 'Enter the current level'])}}
                    </div>
                </div>  
                <br>
                <div class="clearfix"></div>
                

                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}                  
            {!! Form::close() !!}
        </div>
</div>
@endsection 
