<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagsLinksTable extends Migration {

	public function up()
	{
		Schema::create('tags__links', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('tagid')->unsigned();
			$table->smallInteger('linktypeid')->unsigned();
			$table->integer('linkid')->unsigned();
			$table->integer('staffid')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('tags__links');
	}
}