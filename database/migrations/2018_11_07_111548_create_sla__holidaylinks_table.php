<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlaHolidaylinksTable extends Migration {

	public function up()
	{
		Schema::create('sla__holidaylinks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('slaplanid')->unsigned();
			$table->integer('slaholidayid')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('sla__holidaylinks');
	}
}