<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('people', function(Blueprint $table)
		{
			$table->foreign('faculty_id', 'fk_people_faculties1')->references('id')->on('faculties')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('group_id', 'fk_people_groups1')->references('id')->on('groups')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('role_id', 'fk_people_roles1')->references('id')->on('roles')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_people_users1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('people', function(Blueprint $table)
		{
			$table->dropForeign('fk_people_faculties1');
			$table->dropForeign('fk_people_groups1');
			$table->dropForeign('fk_people_roles1');
			$table->dropForeign('fk_people_users1');
		});
	}

}
