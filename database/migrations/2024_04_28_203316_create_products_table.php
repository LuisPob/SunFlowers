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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->double('price');
            $table->double('shipping_cost');
            $table->text('description');
            $table->unsignedBigInteger('category_id');
            $table->integer('quantity');
            $table->unsignedInteger('brand_id')->unsigned();
            $table->string('image_path');
            $table->timestamps();


            $table->foreign('category_id')->references('id')->on('tipo_productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
