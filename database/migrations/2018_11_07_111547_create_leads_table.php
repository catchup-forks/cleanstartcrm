<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeadsTable extends Migration {

	public function up()
	{
		Schema::create('leads', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('companyid')->unsigned();
			$table->integer('prospectid')->unsigned();
			$table->string('title', 100)->index();
			$table->string('slug', 100)->index();
			$table->date('duedate')->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('leads');
	}
}