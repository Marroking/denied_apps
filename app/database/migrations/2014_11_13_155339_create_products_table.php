<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('IdProduct');
			$table->string('nameProduct');
			$table->string('ABCNacional');			
			$table->string('nameSector');
			$table->integer('IdFamily');
			$table->integer('IdInventory');
			$table->integer('IdProductPriceList');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
