<?php

use App\Nodes;
use App\data;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List nodes
Route::get('nodes', function (){
    return Nodes::all();
});

//single node
Route::get('nodes/{river_id}/{lati}/{long}', function($river_id, $lati, $long){
    $infos = Nodes::all();
    $minDist = 0; 
    $minID = 0;
    foreach ($infos as $info){
        if($info->river_id == $river_id){
            if($minDist == 0){
                $minDist = ((($info->latitude)-$lati)*(($info->latitude)-$lati))+((($info->longitude)-$long)*(($info->longitude)-$long));
                $minID = $info->id;
            } else {
                $tmp = ((($info->latitude)-$lati)*(($info->latitude)-$lati))+((($info->longitude)-$long)*(($info->longitude)-$long));
                if($tmp < $minDist){
                    $minDist = $tmp;
                    $minID = $info->id;
                }
            }
        }
        
    }
    //return $minID;
    return data::where('node_id', '=', $minID)->first();

});
