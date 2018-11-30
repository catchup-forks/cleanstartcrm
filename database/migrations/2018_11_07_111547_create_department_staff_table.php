<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartmentStaffTable extends Migration {

	public function up()
	{
		Schema::create('department_staff', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('departmentid')->unsigned();
			$table->integer('teamid')->unsigned();
			$table->integer('employeeid')->unsigned();
			$table->tinyInteger('isteamleader')->unsigned();
			$table->softdeletes();
		});
	}

	public function down()
	{
		Schema::drop('department_staff');
	}
}