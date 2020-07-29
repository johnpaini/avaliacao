<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Schema::dropIfExists('templates');

        Schema::create('templates', function (Blueprint $table) {
            $table->increments('gabarito_id');
			$table->integer('questao_id');
			$table->foreign('questao_id')->references('questao_id')->on('questions')->onDelete('cascade');
            $table->integer('subitem_id');
            $table->foreign('subitem_id')->references('subitem_id')->on('subitemofquestions')->onDelete('cascade');
			$table->mediumText('resposta');
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
        Schema::drop('templates');
    }
}
