<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificationsCriteriaTable extends Migration {

	public function up()
	{
		Schema::create('notifications__criteria', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('notifications__criteria');
	}
}