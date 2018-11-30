<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProjectTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_tasks', function(Blueprint $table)
		{
			$table->foreign('project_id', 'fk_project_tasks_projects')->references('id')->on('projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project_tasks', function(Blueprint $table)
		{
			$table->dropForeign('fk_project_tasks_projects');
		});
	}

}
