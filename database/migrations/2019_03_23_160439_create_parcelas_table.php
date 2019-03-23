<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qtd_parcelas');
            $table->string('data_vencimento');
            $table->integer('movimento_id')->unsigned();
            $table->foreign('movimento_id')->references('id')->on('movimentos');

            $table->integer('situacao_id')->unsigned();
            $table->foreign('situacao_id')->references('id')->on('situacoes');
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
        Schema::dropIfExists('parcelas');
    }
}
