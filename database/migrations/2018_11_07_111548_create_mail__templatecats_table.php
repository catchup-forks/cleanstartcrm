<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailTemplatecatsTable extends Migration {

	public function up()
	{
		Schema::create('mail__templatecats', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('mail__templatecats');
	}
}