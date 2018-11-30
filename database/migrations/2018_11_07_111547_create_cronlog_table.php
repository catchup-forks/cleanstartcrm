<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCronlogTable extends Migration {

	public function up()
	{
		Schema::create('cronlog', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('cronid')->unsigned();
			$table->string('crontitle', 100);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('cronlog');
	}
}