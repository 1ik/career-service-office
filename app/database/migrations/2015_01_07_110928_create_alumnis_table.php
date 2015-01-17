<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlumnisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumnis', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('organisation');
            $table->string("designation");
            $table->string('employment_status');
            $table->string('url');
            $table->integer('user_id')->unsigned();
			$table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumnis');
	}

}
