@extends('layouts.master')
@section('content')

<!-- Intro Header -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <table class="table table-striped">
                <tr>
                    <th>Station Name</th>
                    <th>River</th>
                    <th>Alert Level (m) </th>
                    <th>Minor Flood<br>Level (m)</th>
                    <th>Major Flood<br>Level (m)</th>
                    <th>Current Water<br>Level (m)</th>
                    <th>Condition</th>
                </tr>
                @if(count($nodes) > 0)
                    @foreach($nodes as $node)
                    <tr>
                        <td><a href="/nodes/{{$node->id}}" >{{$node->station_name}}</a></td>
                        <td>
                            @foreach($rivers as $river)
                                @if($river->river_id == $node->river_id)
                                    {{$river->river_name}}
                                @else
                                @endif
                            @endforeach
                            
                        </td>
                        <td>{{$node->alert_level}}</td>
                        <td>{{$node->minor_level}}</td>
                        <td>{{$node->major_level}}</td>
                        <td>{{$node->current_level}}</td>
                        <td>
                            @if($node->current_level >= $node->alert_level)
                                Flood
                            @else
                                Normal
                            @endif
                        </td>
                    </tr>
                    
                    @endforeach
                @else
                <p>No nodes found!</p>
                @endif
            </table>
        </div>
    </div>
</div>
@endsection