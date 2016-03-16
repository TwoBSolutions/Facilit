<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('razao_social');
            $table->string('endereco');
            $table->string('cnpj');
            $table->string('bairro');
            $table->string('numero');
            $table->string('email');
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
       Schema::drop('empresa');
        //
    }
}
