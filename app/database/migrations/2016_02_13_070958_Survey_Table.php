<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SurveyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey', function($table){
			$table->increments('id');
			$table->string('title');
                        $table->integer('etat');
                        $table->float('price');
			$table->timestamps();
                        $table->integer('company_id')->unsigned();
                        $table->foreign('company_id')
      ->references('id')->on('company')
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
		Schema::drop('survey');
	}

}
