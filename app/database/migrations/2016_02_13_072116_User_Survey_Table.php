<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserSurveyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_survey', function($table){
			$table->increments('id');
			$table->timestamps();
                        $table->integer('user_id')->unsigned();
                        $table->foreign('user_id')
      ->references('id')->on('users')
      ->onDelete('cascade');
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
		Schema::drop('user_survey');
	}

}
