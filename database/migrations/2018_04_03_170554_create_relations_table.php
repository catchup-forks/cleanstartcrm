<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('relations', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('name', 45)->unique('name_UNIQUE');
			$table->string('slug', 45)->unique('slug_UNIQUE');
			$table->string('kvknr', 45);
			$table->string('btwn', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('relations');
	}

}
