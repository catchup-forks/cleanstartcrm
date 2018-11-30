<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartmentsTable extends Migration {

	public function up()
	{
		Schema::create('departments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('managerid')->unsigned();
			$table->string('departmentname', 100)->index();
			$table->string('slug', 100)->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('departments');
	}
}