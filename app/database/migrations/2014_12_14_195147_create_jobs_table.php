<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('title');
            $table->text('responsibility');
            $table->string('category');
            $table->string('url');
            $table->double('salary');
            $table->integer('vacancy');
            $table->integer('organisation_id')->unsigned();
            $table->integer('registration_id')->unsigned();
            $table->boolean('hot');
            $table->string('attachment');
            $table->integer('poster');
            $table->integer('approved_by')->default(-1);
            $table->timestamps();
            $table->foreign('organisation_id')->references('id')->on('organisations')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('jobs');
	}

}
