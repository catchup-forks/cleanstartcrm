<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailTemplatesTable extends Migration {

	public function up()
	{
		Schema::create('mail__templates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('mail__templates');
	}
}