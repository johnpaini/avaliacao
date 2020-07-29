<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubitemofquestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subitemofquestions', function (Blueprint $table) {
            $table->increments('subitem_id');
			$table-> integer('questao_id')  ;
			$table->foreign('questao_id')->references('questao_id')->on('questions')->onDelete('cascade');
			$table->mediumtext('descricao');
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
        Schema::drop('subitemofquestions');
    }
}
