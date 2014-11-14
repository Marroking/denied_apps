<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIncidenceProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incidence_products', function(Blueprint $table)
		{
			$table->increments('IdIncidenceProduct');
			$table->integer('quantity');
			$table->integer('iva');
			$table->integer('iva_price');
			$table->float('price');
			$table->boolean('required');
			$table->string('sales');
			$table->text('observations');
			$table->integer('IdReject');
			$table->integer('IdProduct');
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
		Schema::drop('incidence_products');
	}

}
