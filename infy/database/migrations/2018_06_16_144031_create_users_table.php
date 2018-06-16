<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('email', 191);
			$table->string('password', 191);
			$table->string('remember_token', 191)->default('');
			$table->integer('authority_id')->unsigned()->index('fk_users_access_roles1_idx');
			$table->date('left_on')->nullable();
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
		Schema::drop('users');
	}

}
