<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('address_line_1', 45)->nullable();
			$table->string('address_line_2', 45)->nullable();
			$table->string('address_line_3', 45)->nullable();
			$table->string('house_number', 45)->nullable();
			$table->string('house_number_addition', 45)->nullable();
			$table->string('zipcode', 45)->nullable();
			$table->string('city', 45)->nullable();
			$table->integer('country_id')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('addresses');
	}

}
