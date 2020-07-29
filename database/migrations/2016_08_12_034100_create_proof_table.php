<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProofTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proofs', function (Blueprint $table) {
            $table->increments('prova_id');
            $table->char('titulo', 100);
			$table->char('tipo_de_prova', 2)->default('PB');//PV ou PB
			
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
        Schema::drop('proofs');
    }
}
