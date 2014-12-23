<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInternshipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('internships', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('semester');
            $table->integer('year');
            $table->text('message');
            $table->integer('registration_id')->unsigned();
			$table->timestamps();
            $table->foreign('registration_id')->references('id')->on('registrations')->onDelete('cascade')->onUpdate('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('internships');
	}

}
