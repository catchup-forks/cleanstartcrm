<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_staff', function(Blueprint $table)
		{
			$table->integer('company_id')->unsigned()->index('fk_company_staff_company_idx');
			$table->integer('staff_id')->unsigned()->index('fk_company_staff_staff_idx');
			$table->boolean('is_active');
			$table->string('employee_company_nr', 45)->nullable()->unique('employee_company_nr_UNIQUE');
			$table->primary(['company_id','staff_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_staff');
	}

}
