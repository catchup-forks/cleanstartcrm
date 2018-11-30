<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTaskStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_task_staff', function(Blueprint $table)
		{
			$table->integer('company_id')->unsigned();
			$table->integer('project_task_id')->index('fk_project_task_staff_project_tasks_idx');
			$table->integer('staff_id')->unsigned();
			$table->primary(['company_id','project_task_id','staff_id']);
			$table->index(['company_id','staff_id'], 'fk_project_task_staff_company_staff_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_task_staff');
	}

}
