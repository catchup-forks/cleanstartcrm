<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolezTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rolez', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('name', 45)->unique('name_UNIQUE');
			$table->string('slug', 45)->unique('slug_UNIQUE');
			$table->integer('permissions_id')->unsigned()->index('fk_roles_permissions_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roles');
	}

}
