<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductPriceListsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('product_price_lists')->insert(array(
      'price' => 1550,
      'effective_date' => '2014-11-12'
    ));

    DB::table('product_price_lists')->insert(array(
      'price' => 1520,
      'effective_date' => '2014-11-13'
    ));

    DB::table('product_price_lists')->insert(array(
      'price' => 1150.20,
      'effective_date' => '2014-11-14'
    ));

    DB::table('product_price_lists')->insert(array(
      'price' => 1550,
      'effective_date' => '2014-11-12'
    ));

    DB::table('product_price_lists')->insert(array(
      'price' => 1520,
      'effective_date' => '2014-11-13'
    ));

    DB::table('product_price_lists')->insert(array(
      'price' => 1150.20,
      'effective_date' => '2014-11-14'
    ));

    DB::table('product_price_lists')->insert(array(
      'price' => 1550,
      'effective_date' => '2014-11-12'
    ));

    DB::table('product_price_lists')->insert(array(
      'price' => 1520,
      'effective_date' => '2014-11-13'
    ));

    DB::table('product_price_lists')->insert(array(
      'price' => 1150.20,
      'effective_date' => '2014-11-14'
    ));

    DB::table('product_price_lists')->insert(array(
      'price' => 1350,
      'effective_date' => '2014-11-12'
    ));

    DB::table('product_price_lists')->insert(array(
      'price' => 1220,
      'effective_date' => '2014-11-13'
    ));

    DB::table('product_price_lists')->insert(array(
      'price' => 1050.20,
      'effective_date' => '2014-11-14'
    ));
	}

}