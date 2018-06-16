<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_projects', function(Blueprint $table)
		{
			$table->foreign('project_id', 'fk_people_projects_projects1')->references('id')->on('projects')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_people_projects_users1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_projects', function(Blueprint $table)
		{
			$table->dropForeign('fk_people_projects_projects1');
			$table->dropForeign('fk_people_projects_users1');
		});
	}

}
