<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProofquestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proofsquestions', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('prova_id');
			$table->foreign('prova_id')->references('prova_id')->on('proofs')->onDelete('cascade');
			$table->integer('questao_id');
			$table->foreign('questao_id')->references('questao_id')->on('questions')->onDelete('cascade');
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
        Schema::drop('proofsquestions');
    }
}
