<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191)->unique('name_UNIQUE');
			$table->date('held_on')->nullable()->comment('開催日が未定の状態で参加者を募る場合を考慮し、nullを許容
');
			$table->string('summary', 1000)->default('');
			$table->integer('event_categories_id')->unsigned()->index('fk_events_event_categories1_idx');
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
		Schema::drop('events');
	}

}
