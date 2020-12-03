<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNotasAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        app('db')->transaction(function (){
        Schema::create('notas_alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('materia');
            $table->integer('nota_1bim');
            $table->integer('nota_2bim');
            $table->integer('id_aluno');
            $table->foreign('id_aluno')->references('id')->on('alunos');
        });
        });}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas_alunos');
    }
}
