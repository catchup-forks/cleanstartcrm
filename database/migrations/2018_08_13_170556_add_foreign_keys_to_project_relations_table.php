<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProjectRelationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_relations', function(Blueprint $table)
		{
			$table->foreign('project_relation_type', 'fk_project_relations_project_relation_types')->references('id')->on('project_relation_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('relation_id', 'fk_projects_relation')->references('id')->on('relations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_role_id', 'fk_projects_relation_roles')->references('id')->on('project_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project_relations', function(Blueprint $table)
		{
			$table->dropForeign('fk_project_relations_project_relation_types');
			$table->dropForeign('fk_projects_relation');
			$table->dropForeign('fk_projects_relation_roles');
		});
	}

}
