<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_events', function(Blueprint $table)
		{
			$table->foreign('event_id', 'fk_attending_statuses_events1')->references('id')->on('events')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_people_events_users1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_events', function(Blueprint $table)
		{
			$table->dropForeign('fk_attending_statuses_events1');
			$table->dropForeign('fk_people_events_users1');
		});
	}

}
