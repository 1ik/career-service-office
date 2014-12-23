<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registrations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->dateTime("starts_on");
            $table->dateTime('ends_on');
            $table->boolean("open")->default(true);
            $table->integer('capacity');
            $table->boolean('published');
            $table->integer('submitted_by')->default('-1');
            $table->integer('approved_by')->default('-1');
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
		Schema::drop('registrations');
	}

}
