<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaptopTable extends Migration {

	public function up()
	{
		Schema::create('Laptop', function(Blueprint $table) {
			$table->integer('laptopid')->unsigned();
			$table->timestamps();
			$table->integer('typeid')->unsigned();
			$table->string('processor', 255);
			$table->string('graphiccard', 255);
			$table->float('thumbscreen');
			$table->float('weight');
		});
	}

	public function down()
	{
		Schema::drop('Laptop');
	}
}