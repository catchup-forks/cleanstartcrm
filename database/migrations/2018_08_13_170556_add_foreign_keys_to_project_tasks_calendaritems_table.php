<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProjectTasksCalendaritemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_tasks_calendaritems', function(Blueprint $table)
		{
			$table->foreign('calendar_item_id', 'fk_project_tasks_calendaritems_calendar_items')->references('id')->on('calendar_items')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_task_id', 'fk_project_tasks_calendaritems_project_tasks')->references('id')->on('project_tasks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project_tasks_calendaritems', function(Blueprint $table)
		{
			$table->dropForeign('fk_project_tasks_calendaritems_calendar_items');
			$table->dropForeign('fk_project_tasks_calendaritems_project_tasks');
		});
	}

}
