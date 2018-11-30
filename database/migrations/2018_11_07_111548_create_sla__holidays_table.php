<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlaHolidaysTable extends Migration {

	public function up()
	{
		Schema::create('sla__holidays', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 100);
			$table->string('slug', 100);
			$table->tinyInteger('iscustom')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('sla__holidays');
	}
}