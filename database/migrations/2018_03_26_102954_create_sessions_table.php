<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id');
           // $table->bigInteger('sid')->unsigned();
            //$table->foreign('sid')->references('id')->on('fleet_operator');
            $table->string('user_id');
            $table->string('session_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
?>