<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlaPlansTable extends Migration {

	public function up()
	{
		Schema::create('sla__plans', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 100)->index();
			$table->string('slug', 100)->index();
			$table->tinyInteger('is_enabled')->unsigned()->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('sla__plans');
	}
}