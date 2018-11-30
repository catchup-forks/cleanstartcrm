<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailSignaturesTable extends Migration {

	public function up()
	{
		Schema::create('mail__signatures', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('emailqueueid')->unsigned();
			$table->text('signature');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('mail__signatures');
	}
}