<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsThreadsTable extends Migration {

	public function up()
	{
		Schema::create('tickets__threads', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ticketid')->unsigned();
			$table->integer('staffid')->unsigned();
			$table->integer('ticketstatusid')->unsigned();
			$table->integer('tickettypeid')->unsigned();
			$table->integer('ticketpriorityid')->unsigned();
			$table->text('replycontents');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('tickets__threads');
	}
}