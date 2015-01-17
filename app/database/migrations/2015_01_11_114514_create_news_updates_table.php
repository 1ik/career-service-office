<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsUpdatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('news_updates', function(Blueprint $table)
		{

			$table->increments('id');
            $table->string('title');
            $table->longText('content');
            $table->string('summery');
            $table->string('category');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('attachment')->nullable();
            $table->string('attachment_label')->nullable();
            $table->boolean('published');

            $table->integer('poster_id')->unsigned();
            $table->integer('approver_id')->unsigned();

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
		Schema::drop('news_updates');
	}

}
