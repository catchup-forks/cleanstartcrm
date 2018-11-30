<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('company_id')->unsigned()->index('fk_customers_company_company_idx');
			$table->integer('relation_id')->unsigned()->index('fk_customers_company_relation_idx');
			$table->string('customer_nr', 45);
			$table->string('pay_term', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
