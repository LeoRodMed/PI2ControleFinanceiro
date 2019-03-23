<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaixasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baixas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('data_baixa');
            $table->float('valor_pago');
            $table->integer('parcela_id')->unsigned();
            $table->foreign('parcela_id')->references('id')->on('parcelas');

            $table->integer('conta_id')->unsigned();
            $table->foreign('conta_id')->references('id')->on('conta_bancos');

            $table->integer('pagamento_id')->unsigned();
            $table->foreign('pagamento_id')->references('id')->on('forma_pagamentos');

            $table->softDeletes();
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
        Schema::dropIfExists('baixas');
    }
}
