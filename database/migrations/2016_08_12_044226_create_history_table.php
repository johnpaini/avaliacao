<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historys', function (Blueprint $table) {
            $table->increments('history_id');
			$table->integer('prova_id');
			$table->foreign('prova_id')->references('prova_id')->on('proofs');
			$table->integer('user_id');
			$table->foreign('user_id')->references('id')->on('users');
			$table->date('datacopia');
			
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
        Schema::drop('historys');
    }
}
