@extends('layouts.master')
@section('content')


<!-- Intro Header -->
<div class="container-fluid">
    <div class="jumbotron">
        <br>
        @if (Auth::guest())
        @else
            <a href="/nodes/{{$node->id}}/edit" class="btn btn-default">Edit node</a>
            {!!Form::open(['action'=>['NodesController@destroy', $node->id], 'method'=>'POST', 'onsubmit'=>"return confirm('Do you really want to delete?');" , 'class'=>'pull-right'])!!}
                {{Form::hidden('_method' , 'DELETE')}}
                {{Form::submit('delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
        <hr>
        <table class="col-log-4">
            <td style="width:50%">
                <h1>Details</h1>
            </td>
            <td style="width:50%">
                <img style="width=100%;" src="/storage/node_images/{{$node->node_image}}">
            </td>
        </table>
        {{--  <div class="well">
            <div class="row">
                
                <div class="col-md-4 col-sm-4">
                    <img style="width=100%" src="/storage/node_images/{{$node->node_image}}">
                </div>
                <div class="col-md-4 col-sm-4">

                    </div>
            </div>
        </div>  --}}
        <br>
        <div id="map-canvas"></div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.trigger('confirm');
            }
        });


        $(document).on('confirm', function (e) {
            var ele = e.target;
            e.preventDefault();


            $.ajax({
                url: ele.href,
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    if (data['success']) {
                        $("#" + data['tr']).slideUp("slow");
                        alert(data['success']);
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });


            return false;
        });
    });
</script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPySDtB9g9PeztbXnvf78Ss8mwefkRAoA&libraries=places"></script>

    <script>
        function init() {
            var lat = {{$node->latitude}};
            var lng = {{$node->longitude}};
            var map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: {
                    lat: lat,
                    lng: lng
                },
                zoom: 12
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: lat,
                    lng: lng
                },
                map: map
            });                   
        }
        google.maps.event.addDomListener(window, 'load', init);    
    </script>

    {{--  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPySDtB9g9PeztbXnvf78Ss8mwefkRAoA&libraries=places"></script>

    <script>
        var lat = {{$node->latitude}};
        var lng = {{$node->longitude}};
        function init() {
                var map = new google.maps.Map(document.getElementById('map-canvas'), {
                    center: {
                    lat: lat,
                    lng: lng
                    },
                    zoom: 15
                });

                var marker = new google.maps.Marker({
                    center: {
                        lat: lat,
                        lng: lng
                    }
                    map:map
                });

         }
        google.maps.event.addDomListener(window, 'load', init);    
    </script>  --}}
@endsection
