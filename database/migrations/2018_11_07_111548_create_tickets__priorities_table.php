<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsPrioritiesTable extends Migration {

	public function up()
	{
		Schema::create('tickets__priorities', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 100)->index();
			$table->string('slug', 100)->index();
			$table->string('fgcolorcode', 8);
			$table->string('bgcolorcode', 8);
			$table->smallInteger('sortorder');
			$table->tinyInteger('iscustom')->unsigned()->index();
			$table->tinyInteger('ismaster')->unsigned()->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('tickets__priorities');
	}
}