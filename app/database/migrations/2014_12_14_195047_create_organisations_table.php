<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganisationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organisations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('initial');
            $table->string('url');
            $table->integer('organisation_type_id')->unsigned();
            $table->string('image');
            $table->boolean('cool');
			$table->timestamps();
            $table->foreign('organisation_type_id')->references('id')->on('organisation_types')->onDelete('cascade')->onUpdate('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('organisations');
	}

}
