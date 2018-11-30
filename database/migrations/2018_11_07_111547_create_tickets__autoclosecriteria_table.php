<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsAutoclosecriteriaTable extends Migration {

	public function up()
	{
		Schema::create('tickets__autoclosecriteria', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('autocloseruleid')->unsigned()->index();
			$table->string('name', 100)->index();
			$table->string('slug', 100)->index();
			$table->smallInteger('ruleop')->unique()->unsigned();
			$table->string('rulematch', 100)->index();
			$table->smallInteger('rulematchtype')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('tickets__autoclosecriteria');
	}
}