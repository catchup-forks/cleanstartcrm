<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateErrorlogTable extends Migration {

	public function up()
	{
		Schema::create('errorlog', function(Blueprint $table) {
			$table->increments('id');
			$table->string('errortype', 25);
			$table->text('errordetails');
			$table->text('userdata');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('errorlog');
	}
}