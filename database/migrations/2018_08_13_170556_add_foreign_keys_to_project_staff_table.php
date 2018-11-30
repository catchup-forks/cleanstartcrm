<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProjectStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_staff', function(Blueprint $table)
		{
			$table->foreign('project_id', 'fk_project_staff_project')->references('id')->on('projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('staff_id', 'fk_project_staff_staff')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project_staff', function(Blueprint $table)
		{
			$table->dropForeign('fk_project_staff_project');
			$table->dropForeign('fk_project_staff_staff');
		});
	}

}
