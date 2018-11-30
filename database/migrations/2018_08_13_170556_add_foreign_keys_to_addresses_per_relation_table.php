<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAddressesPerRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('addresses_per_relation', function(Blueprint $table)
		{
			$table->foreign('address_id', 'fk_addresses_per_relation_addresses')->references('id')->on('addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('relations_id', 'fk_addresses_per_relation_relations')->references('id')->on('relations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('addresses_per_relation', function(Blueprint $table)
		{
			$table->dropForeign('fk_addresses_per_relation_addresses');
			$table->dropForeign('fk_addresses_per_relation_relations');
		});
	}

}
