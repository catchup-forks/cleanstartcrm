<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	public function up()
	{
		Schema::create('employees', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('companyid')->unsigned();
			$table->string('employeename', 100)->index();
			$table->string('username', 100);
			$table->string('password', 100);
			$table->string('loginhash');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('employees');
	}
}