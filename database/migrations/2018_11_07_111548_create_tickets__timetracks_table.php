<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsTimetracksTable extends Migration {

	public function up()
	{
		Schema::create('tickets__timetracks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ticketid')->unsigned();
			$table->integer('relationid')->unsigned();
			$table->integer('workerstaffid')->unsigned();
			$table->text('content');
			$table->integer('projectid')->unsigned();
			$table->integer('invoiceid')->unsigned();
			$table->integer('creatorstaffid')->unsigned()->index();
			$table->integer('editorstaffid')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('tickets__timetracks');
	}
}