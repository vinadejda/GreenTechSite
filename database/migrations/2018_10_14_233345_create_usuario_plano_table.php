<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioPlanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_plano', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plano')->unsigned();
            $table->foreign('plano')->references('id_plano')->on('plano');
            $table->integer('user')->unsigned();
            $table->foreign('user')->references('id')->on('users');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_plano');
    }
}
