<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsGroupsTable extends Migration {

	public function up()
	{
		Schema::create('settings__groups', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100)->index();
			$table->string('slug', 100)->index();
			$table->integer('moduleid')->unsigned();
			$table->smallInteger('sortorder')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('settings__groups');
	}
}