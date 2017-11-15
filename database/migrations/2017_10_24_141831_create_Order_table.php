<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	public function up()
	{
		Schema::create('Order', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('orderdate', 11);
			$table->string('hour', 15);
			$table->float('total');
			$table->string('indication', 255);
			$table->integer('userid')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Order');
	}
}