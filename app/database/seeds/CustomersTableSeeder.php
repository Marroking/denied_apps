<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder {

	public function run()
	{
 		DB::table('customers')->insert(array(
      'nameCustomer' => 'Juan'
    ));

    DB::table('customers')->insert(array(
      'nameCustomer' => 'Carlos'
    ));

    DB::table('customers')->insert(array(
      'nameCustomer' => 'Victor'
    ));

    DB::table('customers')->insert(array(
      'nameCustomer' => 'Pepe'
    ));

    DB::table('customers')->insert(array(
      'nameCustomer' => 'Toño'
    ));

    DB::table('customers')->insert(array(
      'nameCustomer' => 'Teo'
    ));
    DB::table('customers')->insert(array(
      'nameCustomer' => 'Marcos'
    ));

    DB::table('customers')->insert(array(
      'nameCustomer' => 'Miguel'
    ));

    DB::table('customers')->insert(array(
      'nameCustomer' => 'Andrés'
    ));
    DB::table('customers')->insert(array(
      'nameCustomer' => 'Xavier'
    ));

    DB::table('customers')->insert(array(
      'nameCustomer' => 'Luis'
    ));

    DB::table('customers')->insert(array(
      'nameCustomer' => 'Santiago'
    ));
	}

}