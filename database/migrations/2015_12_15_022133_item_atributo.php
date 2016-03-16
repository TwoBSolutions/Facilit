<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemAtributo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attr_itens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_item');
            $table->string('fabricante');
            $table->string('tipo');
            $table->string('modelo');
            $table->string('nm_serie');
            $table->timestamp('garantia_datefinal');
            $table->string('garantia_desc');
            $table->float('custo_hh');
            $table->float('custo_mensal');
            $table->float('preco_venda');
            $table->float('preco_mensal');
            $table->string('ponto_focal');
            $table->string('ponto_focal_ps');

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
        Schema::drop('attr_itens');
    }
}
