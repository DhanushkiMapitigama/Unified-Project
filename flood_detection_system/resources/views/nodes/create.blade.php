
    <style>
        #map-canvas{
            width: 450px;
            height: 450px;
        }
    </style>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPySDtB9g9PeztbXnvf78Ss8mwefkRAoA&libraries=places"></script>

    
    
<div class="container-fluid" style="background-color:silver;padding:20px">
        <div class="col-lg-10 col-lg-offset-1">
            {!! Form::open(['action' => 'NodesController@store', 'method' => 'POST', 'url' => '/nodes/create', 'files'=> true]) !!}
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
                <div class="form-group">
                        <label for="">Map</label>
                        <input type ="text" id="searchmap">
                        <div id="map-canvas"></div>
                    </div>
                <div class="form-group">
                    <label for="">Lat</label>
                    <input type ="text" class="form-control input-sm" name="lat" id="lat">
                </div>
                <div class="form-group">
                        <label for="">Lng</label> 
                        <input type ="text" class="form-control input-sm" name="lng" id="lng"> 
                    </div>
                <hr>
                {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}                  
            {!! Form::close() !!}
        </div>
</div>

<script>
        // var map = new google.maps.Map(document.getElementById('map-canvas'),{
        //     center:{
        //         lat: 27.72,
        //         lng: 85.36
        //     },
        //     zoom: 15
        // });
    
        // var marker = new google.maps.Marker({
        //     position:{
        //         lat: 27.72,
        //         lng: 85.36
        //     },
        //     map: map,
        //     draggable: true
        // });
    
        // var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
        // google.maps.event.addListner(searchBox,'places_changed',function(){
        //     var places = searchBox.getPlaces();
        //     var bounds = new google.maps.LatLngBounds();
        //     var i, place;
        //     for(i=0;place=places[i];i++){
        //         bounds.extend(place.geometry.location);
        //         marker.setPosition(place.geometry.location);
        //     }
        //     map.fitBounds(bounds);
        //     map.setZoom(15);
        // });
    
        // google.maps.event.addListner(marker,'position_changed',function(){
        //     var lat = marker.getPosition().lat();
        //     var lng = marker.getPosition().lng();
    
        //     $('#lat').val(lat);
        //     $('#lng').val(lng);
        // });


        function init() {
            var map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: {
                lat: 12.9715987,
                lng: 77.59456269999998
                },
                zoom: 12
            });


            var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(document.getElementById('searchmap'));
            google.maps.event.addListener(searchBox, 'places_changed', function() {
                searchBox.set('map', null);
                var places = searchBox.getPlaces();
                var bounds = new google.maps.LatLngBounds();
                var i, place;
                for (i = 0; place = places[i]; i++) {
                    (function(place) {
                        var marker = new google.maps.Marker({
                            position: place.geometry.location,
                            draggable: true
                        });
                        marker.bindTo('map', searchBox, 'map');
                        google.maps.event.addListener(marker, 'position_changed', function() {
                            if (!this.getMap()) {
                                this.unbindAll();
                            }
                            var lat = marker.getPosition().lat();
                            var lng = marker.getPosition().lng();
                    
                            $('#lat').val(lat);
                            $('#lng').val(lng);
                        });
                        bounds.extend(place.geometry.location);
                        

                    }(place));
                }          
                map.fitBounds(bounds);
                searchBox.set('map', map);
                map.setZoom(Math.min(map.getZoom(),12));
            });
        }
    google.maps.event.addDomListener(window, 'load', init);    
</script>