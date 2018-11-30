<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCronTable extends Migration {

	public function up()
	{
		Schema::create('cron', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100)->unique();
			$table->string('slug', 100)->unique();
			$table->string('modulename', 100)->index();
			$table->string('controller', 100)->index();
			$table->string('action', 100)->index();
			$table->tinyInteger('isautorun')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('cron');
	}
}