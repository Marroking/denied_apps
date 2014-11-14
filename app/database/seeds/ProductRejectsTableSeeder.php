<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductRejectsTableSeeder extends Seeder {

	public function run()
	{
    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-12',
      'amount_denied' => 1,
      'IdCustomer' => 1,
      'IdProduct' => 1
    ));

    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-13',
      'amount_denied' => 10,
      'IdCustomer' => 2,
      'IdProduct' => 2
    ));

    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-14',
      'amount_denied' => 100,
      'IdCustomer' => 3,
      'IdProduct' => 3
    ));

    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-12',
      'amount_denied' => 2,
      'IdCustomer' => 3,
      'IdProduct' => 4
    ));

    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-13',
      'amount_denied' => 10,
      'IdCustomer' => 5,
      'IdProduct' => 5
    ));

    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-14',
      'amount_denied' => 100,
      'IdCustomer' => 6,
      'IdProduct' => 6
    ));

    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-12',
      'amount_denied' => 14,
      'IdCustomer' => 7,
      'IdProduct' => 7
    ));

    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-13',
      'amount_denied' => 110,
      'IdCustomer' => 8,
      'IdProduct' => 8
    ));

    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-14',
      'amount_denied' => 100,
      'IdCustomer' => 9,
      'IdProduct' => 9
    ));

    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-12',
      'amount_denied' => 2,
      'IdCustomer' => 10,
      'IdProduct' => 10
    ));

    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-13',
      'amount_denied' => 10,
      'IdCustomer' => 11,
      'IdProduct' => 11
    ));

    DB::table('product_rejects')->insert(array(
      'date_product_reject' => '2014-11-14',
      'amount_denied' => 100,
      'IdCustomer' => 12,
      'IdProduct' => 12
    ));
	}

}