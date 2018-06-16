<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToQuestionnaireContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('questionnaire_contents', function(Blueprint $table)
		{
			$table->foreign('question_type_id', 'fk_questionnaire_contents_question_types1')->references('id')->on('question_types')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('questionnaire_id', 'fk_questionnaire_contents_questionnaires1')->references('id')->on('questionnaires')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('questionnaire_contents', function(Blueprint $table)
		{
			$table->dropForeign('fk_questionnaire_contents_question_types1');
			$table->dropForeign('fk_questionnaire_contents_questionnaires1');
		});
	}

}
