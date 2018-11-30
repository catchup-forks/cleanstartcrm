<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationsEmailaddressesTable extends Migration {

	public function up()
	{
		Schema::create('relations_emailaddresses', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('companyid')->unsigned()->index();
			$table->integer('relationid')->unsigned()->index();
			$table->string('name', 100)->index();
			$table->string('slug', 100)->index();
			$table->string('emailaddress', 100)->index();
			$table->integer('linktypeid')->unsigned();
			$table->tinyInteger('isprimary')->index();
			$table->tinyInteger('issystem');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('relations_emailaddresses');
	}
}