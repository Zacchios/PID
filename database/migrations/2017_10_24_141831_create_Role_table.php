<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleTable extends Migration {

	public function up()
	{
		Schema::create('Role', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 25);
		});
	}

	public function down()
	{
		Schema::drop('Role');
	}
}