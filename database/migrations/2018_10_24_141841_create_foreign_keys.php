<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('roleid')->references('id')->on('Role')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Product', function(Blueprint $table) {
			$table->foreign('marqueid')->references('id')->on('Marque')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Desktop', function(Blueprint $table) {
			$table->foreign('desktopid')->references('id')->on('Product')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Desktop', function(Blueprint $table) {
			$table->foreign('typeid')->references('id')->on('Type')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Laptop', function(Blueprint $table) {
			$table->foreign('laptopid')->references('id')->on('Product')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Laptop', function(Blueprint $table) {
			$table->foreign('typeid')->references('id')->on('Type')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Order', function(Blueprint $table) {
			$table->foreign('userid')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Orderline', function(Blueprint $table) {
			$table->foreign('orderid')->references('id')->on('Order')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Orderline', function(Blueprint $table) {
			$table->foreign('productid')->references('id')->on('Product')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
        Schema::table('Peripherique', function(Blueprint $table) {
            $table->foreign('peripheriqueid')->references('id')->on('Product')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
		Schema::table('Mouse', function(Blueprint $table) {
			$table->foreign('mouseid')->references('peripheriqueid')->on('Peripherique')
						->onDelete('restrict')
						->onUpdate('restrict');
		});

		Schema::table('Peripherique', function(Blueprint $table) {
			$table->foreign('typeid')->references('id')->on('Type')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Screen', function(Blueprint $table) {
			$table->foreign('screenid')->references('peripheriqueid')->on('Peripherique')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Pad', function(Blueprint $table) {
			$table->foreign('padid')->references('peripheriqueid')->on('Peripherique')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Users', function(Blueprint $table) {
			$table->dropForeign('Users_roleid_foreign');
		});
		Schema::table('Product', function(Blueprint $table) {
			$table->dropForeign('Product_marqueid_foreign');
		});
		Schema::table('Desktop', function(Blueprint $table) {
			$table->dropForeign('Desktop_desktopid_foreign');
		});
		Schema::table('Desktop', function(Blueprint $table) {
			$table->dropForeign('Desktop_typeid_foreign');
		});
		Schema::table('Laptop', function(Blueprint $table) {
			$table->dropForeign('Laptop_laptopid_foreign');
		});
		Schema::table('Laptop', function(Blueprint $table) {
			$table->dropForeign('Laptop_typeid_foreign');
		});
		Schema::table('Order', function(Blueprint $table) {
			$table->dropForeign('Order_userid_foreign');
		});
		Schema::table('Orderline', function(Blueprint $table) {
			$table->dropForeign('Orderline_orderid_foreign');
		});
		Schema::table('Orderline', function(Blueprint $table) {
			$table->dropForeign('Orderline_productid_foreign');
		});
		Schema::table('Mouse', function(Blueprint $table) {
			$table->dropForeign('Mouse_mouseid_foreign');
		});
		Schema::table('Peripherique', function(Blueprint $table) {
			$table->dropForeign('Peripherique_peripheriqueid_foreign');
		});
		Schema::table('Peripherique', function(Blueprint $table) {
			$table->dropForeign('Peripherique_typeid_foreign');
		});
		Schema::table('Screen', function(Blueprint $table) {
			$table->dropForeign('Screen_screenid_foreign');
		});
		Schema::table('Pad', function(Blueprint $table) {
			$table->dropForeign('Pad_padid_foreign');
		});
	}
}