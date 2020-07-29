<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('questao_id');
            $table->char('assunto', 100);
            $table->mediumtext('descricao');
			$table->char('tipo', 20);
			$table->decimal('peso', 5, 2);
			$table->binary('imagem');
			$table->integer('user_id');
			$table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('questions');
    }
}
