<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProspectsTable extends Migration {

	public function up()
	{
		Schema::create('prospects', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('companyid')->unsigned()->index();
			$table->integer('relationid')->unsigned()->index();
			$table->string('name', 100)->index();
			$table->string('slug', 100)->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('prospects');
	}
}