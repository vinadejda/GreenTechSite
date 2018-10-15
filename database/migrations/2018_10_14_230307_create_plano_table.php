<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano', function (Blueprint $table) {
            $table->increments('id_plano');
            $table->string('plano', 45);
            $table->decimal('valor', 5,2);
            $table->unsignedInteger('chuva');
            $table->foreign('chuva')->references('id_chuva')->on('chuva');
            $table->unsignedInteger('umidade');
            $table->foreign('umidade')->references('id_umidade')->on('umidade');
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
        Schema::dropIfExists('plano');
    }
}
