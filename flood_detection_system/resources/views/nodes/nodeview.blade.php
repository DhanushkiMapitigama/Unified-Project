@extends('layouts.master')
@section('content')
<img src="{{URL::asset('/img/header.jpg')}}" class="full-width">

<!-- Intro Header -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="jumbotron">
                Station Name<br>
                <br>
                River<br>
                <br>
                Alert Level (m) <br><br>
                Minor Flood Level (m)<br><br>
                Major Flood Level (m)<br><br>
                Current Water Level (m)<br><br>
                Condition
            </div>
        </div>
    </div>
</div>
@endsection
