<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Localizacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('localizacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('endereco');
            $table->string('numero');
            $table->string('bairro');
            $table->string('complemento');
            $table->string('latitude');
            $table->string('longitude');
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
         Schema::drop('localizacao');
    }
}
