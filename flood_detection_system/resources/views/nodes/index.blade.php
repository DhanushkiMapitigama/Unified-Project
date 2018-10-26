@extends('layouts.master')
@section('content')

<!-- Intro Header -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="get-table hidden"></div>
            <div id='vuetest'>
                <nodes></nodes>
            </div>
            <template id='nodes-template'>
                <table id="old-table" class="table table-striped">
                    <tr>
                        <th>Station Name</th>
                        <!-- <th>River</th> -->
                        <th>Alert Level (m) </th>
                        <th>Minor Flood<br>Level (m)</th>
                        <th>Major Flood<br>Level (m)</th>
                        <th>Current Water<br>Level (m)</th>
                        <th>Velocity (m/s) </th>
                        <!-- <th>Condition</th> -->
                    </tr>
                    
                    <tr v-for="nodey in nodes">
                            <td><a href="/nodes/@{{ nodey.ID }}" >@{{ nodey.name }}</a></td>
                            
                            <td>@{{nodey.alert_level}}</td>
                            <td>@{{nodey.minor_level}}</td>
                            <td>@{{nodey.major_level}}</td>
                            <td>@{{nodey.level}}</td>
                            <td>@{{nodey.velocity}}</td>
                            
                        </tr>
                        
                    
                </table>
            </template>
            
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script>
        
        Vue.component('nodes', {
            template: '#nodes-template',
            data : function(){
                return {
                    nodes:[]
                }
            },
            created : function(){
                this.getNodes(); 
            },
            methods : {
                getNodes: function(){
                    $.getJSON( "{{route('api_data')}}",function(nodes){
                        this.nodes = nodes;
                    }.bind(this));

                    setTimeout(this.getNodes, 1000);
                }
            }
        });

        new Vue({
            el: '#vuetest',
        });

        
        
    </script>
@endsection


 





