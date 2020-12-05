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

        DB::transaction(function (){
        Schema::create('notas_alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('materia');
            $table->integer('nota_1bim');
            $table->integer('nota_2bim');
            $table->integer('id_aluno')->unsigned(); //a foreing key deve ser do mesmo tipo que a referencia, portanto o unsigned, pois estava dando erro
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
