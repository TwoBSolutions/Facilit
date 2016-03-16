<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdemServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servico', function (Blueprint $table) {

            $table->string('descricao');
            $table->integer('id_user_created');
            $table->integer('id_config_os');
            $table->timestamp('finished_time');
            $table->integer('status');
            $table->integer('current_percent');
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
        Schema::drop('ordem_servico');
    }
}
