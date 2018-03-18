@extends('layouts.master')
@section('content')


<!-- Intro Header -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="jumbotron">
                <a href="/nodes/{{$node->id}}/edit" class="btn btn-default">Edit node</a>
            </div>
        </div>
    </div>
</div>
@endsection
