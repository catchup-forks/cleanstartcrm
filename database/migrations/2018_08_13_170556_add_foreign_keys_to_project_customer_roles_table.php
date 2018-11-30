<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProjectCustomerRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_customer_roles', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_project_customer_roles_customers')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('projects_id', 'fk_project_customer_roles_projects')->references('id')->on('projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project_customer_roles', function(Blueprint $table)
		{
			$table->dropForeign('fk_project_customer_roles_customers');
			$table->dropForeign('fk_project_customer_roles_projects');
		});
	}

}
