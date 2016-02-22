<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DonationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donation', function($table){
			$table->increments('id');
			$table->float('montant');
			$table->timestamps();
                        $table->integer('user_id')->unsigned();
                        $table->foreign('user_id')
      ->references('id')->on('users')
      ->onDelete('cascade');
                         $table->integer('association_id')->unsigned();
                        $table->foreign('association_id')
      ->references('id')->on('association')
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
		Schema::drop('donation');
	}

}
