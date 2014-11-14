<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class IncidenceProductsTableSeeder extends Seeder {

	public function run()
	{
   	DB::table('incidence_products')->insert(array(
      'quantity' => 100,
      'iva' => 16,
      'iva_price' => 1600,
      'price' => 100,
      'required' => true,
      'sales' => 'Ventas realizadas',
      'observations' => 'Ninguna',
      'IdReject' => '1',
      'IdProduct' => '1'
    ));

    DB::table('incidence_products')->insert(array(
      'quantity' => 200,
      'iva' => 16,
      'iva_price' => 2600,
      'price' => 200,
      'required' => true,
      'sales' => 'Ventas realizadas',
      'observations' => 'Ninguna',
      'IdReject' => '2',
      'IdProduct' => '2'
    ));

    DB::table('incidence_products')->insert(array(
      'quantity' => 300,
      'iva' => 16,
      'iva_price' => 3600,
      'price' => 300,
      'required' => true,
      'sales' => 'Ventas rechazadas',
      'observations' => 'Ninguna',
      'IdReject' => '3',
      'IdProduct' => '3'
    ));

    DB::table('incidence_products')->insert(array(
      'quantity' => 400,
      'iva' => 16,
      'iva_price' => 4600,
      'price' => 400,
      'required' => true,
      'sales' => 'Ventas No realizadas',
      'observations' => 'Ninguna',
      'IdReject' => '4',
      'IdProduct' => '4'
    ));

    DB::table('incidence_products')->insert(array(
      'quantity' => 500,
      'iva' => 16,
      'iva_price' => 5600,
      'price' => 500,
      'required' => true,
      'sales' => 'Ventas realizadas',
      'observations' => 'Ninguna',
      'IdReject' => '5',
      'IdProduct' => '5'
    ));

    DB::table('incidence_products')->insert(array(
      'quantity' => 600,
      'iva' => 16,
      'iva_price' => 6600,
      'price' => 600,
      'required' => true,
      'sales' => 'Ventas rechazadas',
      'observations' => 'Ninguna',
      'IdReject' => '6',
      'IdProduct' => '6'
    ));

    DB::table('incidence_products')->insert(array(
      'quantity' => 700,
      'iva' => 16,
      'iva_price' => 7600,
      'price' => 700,
      'required' => true,
      'sales' => 'Ventas realizadas',
      'observations' => 'Ninguna',
      'IdReject' => '7',
      'IdProduct' => '7'
    ));

    DB::table('incidence_products')->insert(array(
      'quantity' => 800,
      'iva' => 16,
      'iva_price' => 8600,
      'price' => 800,
      'required' => true,
      'sales' => 'Ventas no realizadas',
      'observations' => 'Ninguna',
      'IdReject' => '8',
      'IdProduct' => '8'
    ));

    DB::table('incidence_products')->insert(array(
      'quantity' => 900,
      'iva' => 16,
      'iva_price' => 9600,
      'price' => 900,
      'required' => true,
      'sales' => 'Ventas rechazadas',
      'observations' => 'Ninguna',
      'IdReject' => '9',
      'IdProduct' => '9'
    ));

    DB::table('incidence_products')->insert(array(
      'quantity' => 1000,
      'iva' => 16,
      'iva_price' => 10600,
      'price' => 1000,
      'required' => true,
      'sales' => 'Ventas realizadas',
      'observations' => 'Ninguna',
      'IdReject' => '10',
      'IdProduct' => '10'
    ));

    DB::table('incidence_products')->insert(array(
      'quantity' => 1100,
      'iva' => 16,
      'iva_price' => 11600,
      'price' => 1100,
      'required' => true,
      'sales' => 'Ventas no realizadas',
      'observations' => 'Ninguna',
      'IdReject' => '11',
      'IdProduct' => '11'
    ));

    DB::table('incidence_products')->insert(array(
      'quantity' => 1200,
      'iva' => 16,
      'iva_price' => 12600,
      'price' => 1200,
      'required' => false,
      'sales' => 'Ventas rechazadas',
      'observations' => 'Ninguna',
      'IdReject' => '13',
      'IdProduct' => '13'
    ));
	}

}