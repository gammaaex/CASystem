<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('fk_people_projects_users1_idx');
			$table->integer('project_id')->unsigned()->index('fk_people_projects_projects1_idx');
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
		Schema::drop('users_projects');
	}

}
