<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeripheriqueTable extends Migration {

	public function up()
	{
		Schema::create('Peripherique', function(Blueprint $table) {
			$table->integer('peripheriqueid')->unsigned();
			$table->timestamps();
			$table->integer('typeid')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Peripherique');
	}
}