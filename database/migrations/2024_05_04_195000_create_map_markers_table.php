<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapMarkersTable extends Migration
{
    public function up()
    {
        Schema::create('map_markers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->double('latitud', 10, 6);
            $table->double('longitud', 10, 6);
            $table->string('horario');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('map_markers');
    }
}