<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMouseTable extends Migration {

	public function up()
	{
		Schema::create('Mouse', function(Blueprint $table) {
			$table->integer('mouseid')->unsigned();
			$table->timestamps();
			$table->float('maxdpi');
			$table->float('weight');
			$table->integer('buttonnumber');
		});
	}

	public function down()
	{
		Schema::drop('Mouse');
	}
}