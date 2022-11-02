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
        Schema::create('producto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('serie');
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('modelo_id');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('dimensiones_id');
            $table->unsignedBigInteger('peso_id');
            $table->timestamps();
            $table->foreign('tipo_id')->references('id')->on('tipo')->onDelete('cascade');
            $table->foreign('modelo_id')->references('id')->on('modelo')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marca')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('color')->onDelete('cascade');
            $table->foreign('dimensiones_id')->references('id')->on('dimensiones')->onDelete('cascade');
            $table->foreign('peso_id')->references('id')->on('peso')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
