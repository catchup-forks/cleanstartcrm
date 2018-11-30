<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProjectsCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('projects_customers', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_projects_customers_customers')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('projects_id', 'fk_projects_customers_projects')->references('id')->on('projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('projects_customers', function(Blueprint $table)
		{
			$table->dropForeign('fk_projects_customers_customers');
			$table->dropForeign('fk_projects_customers_projects');
		});
	}

}
