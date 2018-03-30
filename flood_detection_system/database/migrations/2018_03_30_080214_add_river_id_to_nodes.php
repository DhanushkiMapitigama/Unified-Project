<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRiverIdToNodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nodes', function($table){
            $table->integer('river_id')->unsigned();
            $table->foreign('river_id')->references('river_id')->on('rivers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nodes', function($table){
            $table->dropForeign(['river_id']); 
            $table->dropColumn('river_id');
        });
        
    }
}
