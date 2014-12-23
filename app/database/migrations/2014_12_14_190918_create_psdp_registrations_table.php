<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePsdpRegistrationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psdp_registrations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('semester');
            $table->integer('year');
            $table->string('status')->default('enrolled');
            $table->integer('registration_id')->unsigned();
			$table->timestamps();
            $table->foreign('registration_id')->references('id')->on('registrations')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('psdp_registrations');
	}

}
