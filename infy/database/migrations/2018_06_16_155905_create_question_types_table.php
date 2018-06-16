<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191)->unique('name_UNIQUE');
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
		Schema::drop('question_types');
	}

}
