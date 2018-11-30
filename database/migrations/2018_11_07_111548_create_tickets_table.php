<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsTable extends Migration {

	public function up()
	{
		Schema::create('tickets', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ticketkey', 25)->index();
			$table->integer('customerid')->unsigned();
			$table->integer('projectid')->unsigned();
			$table->integer('departmentid')->unsigned();
			$table->integer('tickettypeid')->unsigned();
			$table->integer('ticketstatusid')->unsigned();
			$table->integer('priorityid')->unsigned();
			$table->string('subject')->index();
			$table->text('content');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('tickets');
	}
}