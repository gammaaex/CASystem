<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLendingHistoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lending_histories', function(Blueprint $table)
		{
			$table->foreign('equipment_id', 'fk_lending_histories_equipments1')->references('id')->on('equipments')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_lending_histories_users1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lending_histories', function(Blueprint $table)
		{
			$table->dropForeign('fk_lending_histories_equipments1');
			$table->dropForeign('fk_lending_histories_users1');
		});
	}

}
