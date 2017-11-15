<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderlineTable extends Migration {

	public function up()
	{
		Schema::create('Orderline', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->float('quantity');
			$table->integer('orderid')->unsigned();
			$table->integer('productid')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Orderline');
	}
}