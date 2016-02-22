<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question', function($table){
			$table->increments('id');
			$table->string('libelle');
			$table->timestamps();
                        $table->integer('survey_id')->unsigned();
                        $table->foreign('survey_id')
      ->references('id')->on('survey')
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
		Schema::drop('question');
	}

}
