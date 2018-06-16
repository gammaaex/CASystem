<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('about', 191);
			$table->string('comment', 1000)->default('');
			$table->string('proposal_link', 8190)->default('');
			$table->integer('project_status_id')->unsigned()->index('fk_projects_project_statuses1_idx');
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
		Schema::drop('projects');
	}

}
