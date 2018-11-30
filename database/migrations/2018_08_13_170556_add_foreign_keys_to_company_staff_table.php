<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompanyStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('company_staff', function(Blueprint $table)
		{
			$table->foreign('company_id', 'fk_company_staff_company')->references('id')->on('companies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('staff_id', 'fk_company_staff_staff')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('company_staff', function(Blueprint $table)
		{
			$table->dropForeign('fk_company_staff_company');
			$table->dropForeign('fk_company_staff_staff');
		});
	}

}
