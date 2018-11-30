<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->integer('id')->unsigned();
			$table->integer('company_id')->unsigned()->index('fk_projects_company_idx');
			$table->string('name', 45)->unique('name_UNIQUE');
			$table->string('slug', 45)->unique('slug_UNIQUE');
			$table->date('start_date')->nullable();
			$table->date('due_date')->nullable();
			$table->primary(['id','company_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
