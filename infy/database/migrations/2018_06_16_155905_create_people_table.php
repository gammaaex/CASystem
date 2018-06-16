<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('fk_people_users1_idx');
			$table->string('last_name', 191);
			$table->string('first_name', 191);
			$table->string('last_name_kana', 191);
			$table->string('first_name_kana', 191);
			$table->enum('gender', array('不明','男性','女性','適用不能'));
			$table->integer('faculty_id')->unsigned()->index('fk_people_faculties1_idx');
			$table->date('admitted_on');
			$table->boolean('student_number');
			$table->string('email', 191);
			$table->string('phone', 191)->default('');
			$table->integer('group_id')->unsigned()->index('fk_people_groups1_idx');
			$table->integer('role_id')->unsigned()->index('fk_people_roles1_idx');
			$table->string('interest', 191)->default('');
			$table->string('special_ability', 191)->default('');
			$table->string('portfolio', 1000)->default('');
			$table->string('image_link', 8190)->default('');
			$table->timestamps();
			$table->string('created_by', 191);
			$table->string('updated_by', 191);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('people');
	}

}
