<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProjectRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_roles', function(Blueprint $table)
		{
			$table->foreign('project_id', 'fk_project_roles_staff')->references('project_id')->on('project_staff')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project_roles', function(Blueprint $table)
		{
			$table->dropForeign('fk_project_roles_staff');
		});
	}

}
