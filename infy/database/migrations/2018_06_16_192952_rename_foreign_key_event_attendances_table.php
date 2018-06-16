<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameForeignKeyEventAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_attendances', function (Blueprint $table) {
            $table->renameIndex('fk_attending_statuses_events1_idx', 'fk_event_attendances_events1_idx');
            $table->renameIndex('fk_people_events_users1_idx', 'fk_event_attendances_users1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_attendances', function (Blueprint $table) {
            $table->renameIndex('fk_event_attendances_events1_idx', 'fk_attending_statuses_events1_idx');
            $table->renameIndex('fk_event_attendances_users1_idx', 'fk_people_events_users1_idx');
        });
    }
}
