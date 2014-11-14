<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
    DB::table('products')->insert(array(
      'nameProduct' => 'Faro',
      'ABCNacional' => 'ABC',
      'nameSector' => 'Sector A',
      'IdFamily' => 1,
      'IdInventory' => 1,
      'IdProductPriceList' => 1
    ));

    DB::table('products')->insert(array(
      'nameProduct' => 'Calavera',
      'ABCNacional' => 'DEF',
      'nameSector' => 'Sector B',
      'IdFamily' => 2,
      'IdInventory' => 2,
      'IdProductPriceList' => 2
    ));

    DB::table('products')->insert(array(
      'nameProduct' => 'Espejo',
      'ABCNacional' => 'GHI',
      'nameSector' => 'Sector D',
      'IdFamily' => 3,
      'IdInventory' => 3,
      'IdProductPriceList' => 3
    ));

    DB::table('products')->insert(array(
      'nameProduct' => 'Muelle',
      'ABCNacional' => 'JKL',
      'nameSector' => 'Sector E',
      'IdFamily' => 4,
      'IdInventory' => 4,
      'IdProductPriceList' => 4
    ));

    DB::table('products')->insert(array(
      'nameProduct' => 'Balatas',
      'ABCNacional' => 'MNO',
      'nameSector' => 'Sector F',
      'IdFamily' => 5,
      'IdInventory' => 5,
      'IdProductPriceList' => 5
    ));

    DB::table('products')->insert(array(
      'nameProduct' => 'Cigueñal',
      'ABCNacional' => 'PQR',
      'nameSector' => 'Sector G',
      'IdFamily' => 6,
      'IdInventory' => 6,
      'IdProductPriceList' => 6
    ));

    DB::table('products')->insert(array(
      'nameProduct' => 'Faro 2',
      'ABCNacional' => 'ABC',
      'nameSector' => 'Sector A',
      'IdFamily' => 7,
      'IdInventory' => 7,
      'IdProductPriceList' => 7
    ));

    DB::table('products')->insert(array(
      'nameProduct' => 'Llanta',
      'ABCNacional' => 'DEF',
      'nameSector' => 'Sector B',
      'IdFamily' => 8,
      'IdInventory' => 8,
      'IdProductPriceList' => 8
    ));

    DB::table('products')->insert(array(
      'nameProduct' => 'Acumulador',
      'ABCNacional' => 'GHI',
      'nameSector' => 'Sector D',
      'IdFamily' => 9,
      'IdInventory' => 9,
      'IdProductPriceList' => 9
    ));

    DB::table('products')->insert(array(
      'nameProduct' => 'Retrovisor',
      'ABCNacional' => 'JKL',
      'nameSector' => 'Sector E',
      'IdFamily' => 10,
      'IdInventory' => 10,
      'IdProductPriceList' => 10
    ));

    DB::table('products')->insert(array(
      'nameProduct' => 'Delantera',
      'ABCNacional' => 'MNO',
      'nameSector' => 'Sector F',
      'IdFamily' => 11,
      'IdInventory' => 11,
      'IdProductPriceList' => 11
    ));

    DB::table('products')->insert(array(
      'nameProduct' => 'Parachoques',
      'ABCNacional' => 'PQR',
      'nameSector' => 'Sector G',
      'IdFamily' => 12,
      'IdInventory' => 12,
      'IdProductPriceList' => 12
    ));
	}

}