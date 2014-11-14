<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductRejectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_rejects', function(Blueprint $table)
		{
			$table->increments('IdProductReject');
			$table->date('date_product_reject');
			$table->float('amount_denied');
			$table->integer('IdCustomer');
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
		Schema::drop('product_rejects');
	}

}
