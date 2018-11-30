<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalendarEventsTable extends Migration {

	public function up()
	{
		Schema::create('calendar__events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 100)->index();
			$table->string('slug', 100)->index();
			$table->integer('relation_id')->unsigned();
			$table->timestamp('starts_at');
			$table->timestamp('ends_at')->nullable();
			$table->integer('location_id')->unsigned();
			$table->string('eventfgcolor', 8);
			$table->string('eventbgcolor', 8);
			$table->boolean('is_repeating');
			$table->tinyInteger('is_allday');
			$table->tinyInteger('is_public')->unsigned();
			$table->text('description');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('calendar__events');
	}
}