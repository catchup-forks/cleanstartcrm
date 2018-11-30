<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('role_staff', function(Blueprint $table)
		{
			$table->integer('role_id')->unsigned()->index('fk_roles_has_staff_roles1_idx');
			$table->integer('staff_id')->unsigned()->index('fk_roles_has_staff_staff1_idx');
			$table->primary(['role_id','staff_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_staff');
	}

}
