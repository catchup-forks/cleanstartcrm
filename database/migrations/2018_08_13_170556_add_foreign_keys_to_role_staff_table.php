<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRoleStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('role_staff', function(Blueprint $table)
		{
			$table->foreign('role_id', 'fk_role_staff_role')->references('id')->on('roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('staff_id', 'fk_role_staff_staff')->references('id')->on('employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('role_staff', function(Blueprint $table)
		{
			$table->dropForeign('fk_role_staff_role');
			$table->dropForeign('fk_role_staff_staff');
		});
	}

}
