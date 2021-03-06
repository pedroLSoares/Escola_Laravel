<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProfessorInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        app('db')->transaction(function (){
        Schema::table('professores', function (Blueprint $table) {
            $table->foreignId('usuario_id')->unsigned()->nullable();
            $table->foreign('usuario_id')->references('id')->on('users');
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
        Schema::table('professores', function (Blueprint $table) {
            $table->dropColumn('usuario_id');
        });
    }
}
