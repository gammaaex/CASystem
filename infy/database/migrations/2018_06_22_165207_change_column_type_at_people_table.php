<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnTypeAtPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->dropColumn('student_number');
        });

        Schema::table('people', function (Blueprint $table) {
            $table->unsignedInteger('student_number')->after('admitted_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->dropColumn('student_number');
        });

        Schema::table('people', function (Blueprint $table) {
            $table->boolean('student_number')->after('admitted_on');
        });
    }
}
