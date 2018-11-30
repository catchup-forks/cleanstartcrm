<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplogdataTable extends Migration {

	public function up()
	{
		Schema::create('applogdata', function(Blueprint $table) {
			$table->increments('id');
			$table->mediumInteger('applogid');
			$table->text('applogdata');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('applogdata');
	}
}