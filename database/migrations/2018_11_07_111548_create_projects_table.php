<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100)->index();
			$table->string('slug', 100)->index();
			$table->integer('customerid')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('projects');
	}
}