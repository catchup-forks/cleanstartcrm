<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalendarItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calendar_items', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('name', 45);
			$table->dateTime('start_date');
			$table->dateTime('end_date')->nullable();
			$table->boolean('is_repeating');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('calendar_items');
	}

}
