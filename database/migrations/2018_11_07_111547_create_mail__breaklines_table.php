<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailBreaklinesTable extends Migration {

	public function up()
	{
		Schema::create('mail__breaklines', function(Blueprint $table) {
			$table->increments('id');
			$table->string('breakline', 100)->index();
			$table->tinyInteger('isregexp')->unsigned();
			$table->smallInteger('sortorder')->index();
		});
	}

	public function down()
	{
		Schema::drop('mail__breaklines');
	}
}