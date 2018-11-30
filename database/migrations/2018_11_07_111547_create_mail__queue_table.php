<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailQueueTable extends Migration {

	public function up()
	{
		Schema::create('mail__queue', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('mailqueuetypeid')->unsigned();
			$table->string('emailaddress', 100);
			$table->string('host', 100)->index();
			$table->string('username', 100)->index();
			$table->string('password', 100);
			$table->integer('departmentid')->unsigned();
			$table->integer('tickettypeid')->unsigned();
			$table->integer('ticketpriorityid')->unsigned();
			$table->integer('ticketstatusid')->unsigned();
			$table->integer('ticketautoresponder')->unsigned();
			$table->integer('replyautoresponderid')->unsigned();
			$table->tinyInteger('fetchenabled')->unsigned();
			$table->tinyInteger('smtpenabled')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('mail__queue');
	}
}