<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customers', function(Blueprint $table)
		{
			$table->foreign('company_id', 'fk_customers_company_companies')->references('id')->on('companies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('relation_id', 'fk_customers_company_relations')->references('id')->on('relations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customers', function(Blueprint $table)
		{
			$table->dropForeign('fk_customers_company_companies');
			$table->dropForeign('fk_customers_company_relations');
		});
	}

}
