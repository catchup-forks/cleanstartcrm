<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProjectTaskStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_task_staff', function(Blueprint $table)
		{
			$table->foreign('company_id', 'fk_project_task_staff_company_staff')->references('company_id')->on('company_staff')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_task_id', 'fk_project_task_staff_project_tasks')->references('id')->on('project_tasks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project_task_staff', function(Blueprint $table)
		{
			$table->dropForeign('fk_project_task_staff_company_staff');
			$table->dropForeign('fk_project_task_staff_project_tasks');
		});
	}

}
