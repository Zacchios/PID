<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	public function up()
	{
		Schema::create('Product', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('reference', 255);
			$table->binary('media');
			$table->float('unitprice');
			$table->float('stock');
			$table->integer('promotion')->default('0');
			$table->integer('marqueid')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Product');
	}
}