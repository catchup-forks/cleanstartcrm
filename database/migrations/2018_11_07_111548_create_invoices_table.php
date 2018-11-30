<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	public function up()
	{
		Schema::create('invoices', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('companyid')->unsigned()->index();
			$table->integer('projectid')->unsigned();
			$table->integer('customerid')->unsigned()->index();
			$table->string('name', 100)->index();
			$table->string('slug', 100)->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('invoices');
	}
}