<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailCatchallrulesTable extends Migration {

	public function up()
	{
		Schema::create('mail__catchallrules', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 100)->index();
			$table->string('ruleexpression', 100)->index();
			$table->integer('emailqueueid')->unsigned()->index();
			$table->smallInteger('sortorder')->unsigned()->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('mail__catchallrules');
	}
}