<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        app('db')->transaction(function (){
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('id_professor')->unsigned();;
            $table->foreign('id_professor')->references('id')->on('professores');

        });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
