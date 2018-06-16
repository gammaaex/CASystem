<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionnaireContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questionnaire_contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('questionnaire_id')->unsigned()->index('fk_questionnaire_contents_questionnaires1_idx');
			$table->string('question', 191);
			$table->integer('question_type_id')->unsigned()->index('fk_questionnaire_contents_question_types1_idx');
			$table->string('comment', 1000)->default('');
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
		Schema::drop('questionnaire_contents');
	}

}
