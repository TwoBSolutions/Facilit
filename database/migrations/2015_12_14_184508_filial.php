<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Filial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filial', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_empresa');
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
       Schema::drop('filial');
        //
    }
}
