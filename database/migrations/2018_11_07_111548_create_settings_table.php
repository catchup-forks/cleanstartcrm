<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('settinggroupid')->unsigned();
			$table->string('name', 100)->index();
			$table->integer('moduleid')->unsigned();
			$table->tinyInteger('iscustom');
			$table->string('settingtype', 25)->index();
			$table->smallInteger('sortorder')->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}