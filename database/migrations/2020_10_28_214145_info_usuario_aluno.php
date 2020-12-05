<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InfoUsuarioAluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        app('db')->transaction(function (){
        Schema::table('alunos', function (Blueprint $table) {
            $table->string('curso')->nullable();
            $table->foreignId('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
        });}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropColumn('curso','usuario_id');
        });
    }
}
