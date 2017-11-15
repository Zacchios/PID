<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePadTable extends Migration {

	public function up()
	{
		Schema::create('Pad', function(Blueprint $table) {
			$table->integer('padid')->unsigned();
			$table->timestamps();
			$table->string('technology', 255);
			$table->tinyInteger('padnum');
		});
	}

	public function down()
	{
		Schema::drop('Pad');
	}
}