<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsAutocloserulesTable extends Migration {

	public function up()
	{
		Schema::create('tickets__autocloserules', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 100)->index();
			$table->string('slug', 100)->index();
			$table->integer('targetticketstatusid')->unsigned();
			$table->tinyInteger('isenabled')->unsigned();
			$table->smallInteger('sortorder')->unsigned()->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('tickets__autocloserules');
	}
}