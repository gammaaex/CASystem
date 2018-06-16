<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProjectProgressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_progresses', function(Blueprint $table)
		{
			$table->foreign('project_id', 'fk_project_progresses_projects1')->references('id')->on('projects')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project_progresses', function(Blueprint $table)
		{
			$table->dropForeign('fk_project_progresses_projects1');
		});
	}

}
