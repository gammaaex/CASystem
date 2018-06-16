<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToQuestionnaireAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('questionnaire_answers', function(Blueprint $table)
		{
			$table->foreign('questionnaire_content_id', 'fk_questionnaire_answers_questionnaire_contents1')->references('id')->on('questionnaire_contents')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_questionnaire_answers_users1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('questionnaire_answers', function(Blueprint $table)
		{
			$table->dropForeign('fk_questionnaire_answers_questionnaire_contents1');
			$table->dropForeign('fk_questionnaire_answers_users1');
		});
	}

}
