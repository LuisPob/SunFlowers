<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_producto');
            $table->string('nombre_producto');
            $table->integer('precio');
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_compra');
            $table->integer('total_producto');
            $table->date('fecha_compra');


            // $table->foreign('id_compra')->references('id')->on('compras');
            // $table->foreign('id_producto')->references('id')->on('productos');
            // $table->foreign('id_usuario')->references('id')->on('usuarios');
            // $table->foreign('id_estado')->references('id')->on('estados');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recibos');
    }
};
