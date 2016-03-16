<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Patrimonio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimonio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->integer('tipo');
            $table->string('documento');
            $table->string('fone');
            $table->string('fone_2');

            $table->integer('acesso');
            $table->integer('status');
           
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
        Schema::drop('patrimonio');
    }
}
