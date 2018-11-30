<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesPerRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses_per_relation', function(Blueprint $table)
		{
			$table->integer('relations_id')->unsigned()->index('fk_addresses_per_relation_relation_idx');
			$table->integer('address_id')->unsigned()->index('fk_addresses_per_relation_address_idx');
			$table->string('address_type', 45)->nullable();
			$table->primary(['relations_id','address_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('addresses_per_relation');
	}

}
