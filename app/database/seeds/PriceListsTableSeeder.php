<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PriceListsTableSeeder extends Seeder {

	public function run()
	{
		
			DB::table('price_lists')->insert(array(
        'price' => 1950,
        'IdCustomer' => 1
      ));

    	DB::table('price_lists')->insert(array(
        'price' => 1550,
        'IdCustomer' => 2
      ));

      DB::table('price_lists')->insert(array(
        'price' => 1350.55,
        'IdCustomer' => 3
      ));

      DB::table('price_lists')->insert(array(
        'price' => 1950,
        'IdCustomer' => 4
      ));

      DB::table('price_lists')->insert(array(
        'price' => 154.50,
        'IdCustomer' => 5
      ));

      DB::table('price_lists')->insert(array(
        'price' => 1350.55,
        'IdCustomer' => 6
      ));

      DB::table('price_lists')->insert(array(
        'price' => 195.20,
        'IdCustomer' => 7
      ));

      DB::table('price_lists')->insert(array(
        'price' => 155.30,
        'IdCustomer' => 8
      ));

      DB::table('price_lists')->insert(array(
        'price' => 1350.55,
        'IdCustomer' => 9
      ));
      
      DB::table('price_lists')->insert(array(
        'price' => 1980.20,
        'IdCustomer' => 10
      ));

      DB::table('price_lists')->insert(array(
        'price' => 1250,
        'IdCustomer' => 11
      ));

      DB::table('price_lists')->insert(array(
        'price' => 1150.55,
        'IdCustomer' => 12
      ));

	}

}