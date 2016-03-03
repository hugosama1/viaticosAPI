<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Viaticos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaticos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('viaje_id')->unsigned();
            $table->integer('concepto_id')->unsigned();
            $table->string('descripcion');
            $table->double('cantidad');
            $table->double('iva');
            $table->foreign('concepto_id')->references('id')->on('conceptos')->onDelete('cascade');
            $table->foreign('viaje_id')->references('id')->on('viajes')->onDelete('cascade');
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
        Schema::drop('viaticos');
    }
}
