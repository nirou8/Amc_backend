<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResponseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reponses', function($table){
			$table->increments('id');
			$table->string('reponse');
			$table->timestamps();
                        $table->integer('question_id')->unsigned();
                        $table->foreign('question_id')
      ->references('id')->on('question')
      ->onDelete('cascade');
                        $table->integer('user_id')->unsigned();
                        $table->foreign('user_id')
      ->references('id')->on('users')
      ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reponses');
	}

}
