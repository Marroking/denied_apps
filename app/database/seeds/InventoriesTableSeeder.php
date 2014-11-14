<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InventoriesTableSeeder extends Seeder {

	public function run()
	{
		
		DB::table('inventories')->insert(array(
      'quantity_free' => 100,
      'quantity_busy' => 16,
      'ABCUN' => 1600,
      'StockMax' => 600
    ));

    DB::table('inventories')->insert(array(
      'quantity_free' => 200,
      'quantity_busy' => 100,
      'ABCUN' => 1600,
      'StockMax' => 400
    ));

    DB::table('inventories')->insert(array(
      'quantity_free' => 300,
      'quantity_busy' => 200,
      'ABCUN' => 100,
      'StockMax' => 600
    ));

    DB::table('inventories')->insert(array(
      'quantity_free' => 400,
      'quantity_busy' => 16,
      'ABCUN' => 1600,
      'StockMax' => 700
    ));

    DB::table('inventories')->insert(array(
      'quantity_free' => 500,
      'quantity_busy' => 200,
      'ABCUN' => 1600,
      'StockMax' => 600
    ));

    DB::table('inventories')->insert(array(
      'quantity_free' => 600,
      'quantity_busy' => 300,
      'ABCUN' => 100,
      'StockMax' => 800
    ));

    DB::table('inventories')->insert(array(
      'quantity_free' => 700,
      'quantity_busy' => 16,
      'ABCUN' => 1600,
      'StockMax' => 700
    ));

    DB::table('inventories')->insert(array(
      'quantity_free' => 800,
      'quantity_busy' => 200,
      'ABCUN' => 1600,
      'StockMax' => 1000
    ));

    DB::table('inventories')->insert(array(
      'quantity_free' => 900,
      'quantity_busy' => 300,
      'ABCUN' => 100,
      'StockMax' => 900
    ));

    DB::table('inventories')->insert(array(
      'quantity_free' => 1000,
      'quantity_busy' => 16,
      'ABCUN' => 1600,
      'StockMax' => 800
    ));

    DB::table('inventories')->insert(array(
      'quantity_free' => 1100,
      'quantity_busy' => 300,
      'ABCUN' => 1600,
      'StockMax' => 800
    ));

    DB::table('inventories')->insert(array(
      'quantity_free' => 1200,
      'quantity_busy' => 400,
      'ABCUN' => 100,
      'StockMax' => 800
    ));

	}

}