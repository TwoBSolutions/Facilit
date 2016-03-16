<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParametrosOs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('parametros_os', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tempo_para_resolucao');
            $table->integer('alerta1');
            $table->integer('alerta2');
            $table->integer('alerta3');
            $table->string('email_alerta1');
            $table->string('email_alerta2');
            $table->string('email_alerta3');
            $table->integer('sendmail');
            $table->string('descricao');
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
        Schema::drop('parametros_os');
    }
}
