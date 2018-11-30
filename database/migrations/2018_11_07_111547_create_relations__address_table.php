<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationsAddressTable extends Migration {

	public function up()
	{
		Schema::create('relations__address', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('companyid')->unsigned()->index();
			$table->integer('relationid')->unsigned()->index();
			$table->string('name', 100)->index();
			$table->string('slug', 100)->index();
			$table->string('address', 100)->index();
			$table->string('address2', 100)->index();
			$table->string('housenumber', 25)->index();
			$table->string('housenumberaddition', 10)->index();
			$table->string('postalcode', 25)->index();
			$table->string('city', 25)->index();
			$table->integer('countryid');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('relations__address');
	}
}