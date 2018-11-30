<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTasksCalendaritemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_tasks_calendaritems', function(Blueprint $table)
		{
			$table->integer('project_task_id')->index('fk_project_tasks_calendaritems_project_task_idx');
			$table->integer('calendar_item_id')->unsigned()->index('fk_project_tasks_calendaritems_calendar_item_idx');
			$table->primary(['project_task_id','calendar_item_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_tasks_calendaritems');
	}

}
