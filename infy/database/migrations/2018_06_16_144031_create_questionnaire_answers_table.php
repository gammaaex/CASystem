<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionnaireAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questionnaire_answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('questionnaire_content_id')->unsigned()->index('fk_questionnaire_answers_questionnaire_contents1_idx');
			$table->integer('user_id')->unsigned()->index('fk_questionnaire_answers_users1_idx');
			$table->string('answer', 191);
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
		Schema::drop('questionnaire_answers');
	}

}
