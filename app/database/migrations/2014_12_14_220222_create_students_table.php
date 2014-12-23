<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('student_id');
            $table->double('current_cgpa');
            $table->double('credits_completed');
            $table->integer('department_id')->unsigned();
            $table->integer('major')->unsigned();
            $table->integer('minor')->unsigned();
            $table->string('semester');

            $table->text('present_address');
            $table->text('present_city');
            $table->string('present_postal_code');
            $table->text('permanent_address');
            $table->text('permanent_city');
            $table->string('permanent_postal_code');
            $table->string('web_url');

            $table->string('gurdian_name');
            $table->string('gurdian_relation');
            $table->string('gurdian_work_institute');
            $table->string('gurdian_designation');
            $table->string('gurdian_contact');
            $table->string('gurdian_email');

            $table->text('bio');
            $table->string('employment_status');

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('major')->references('id')->on('courses');
            $table->foreign('minor')->references('id')->on('courses');
            $table->foreign('department_id')->references('id')->on('departments');

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
		Schema::drop('students');
	}

}
