<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScreenTable extends Migration {

	public function up()
	{
		Schema::create('Screen', function(Blueprint $table) {
			$table->integer('screenid')->unsigned();
			$table->timestamps();
			$table->float('thumbscreen');
			$table->string('format', 255);
		});
	}

	public function down()
	{
		Schema::drop('Screen');
	}
}