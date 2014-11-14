<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FamiliesTableSeeder extends Seeder {

	public function run()
	{
 		DB::table('families')->insert(array(
      'nameFamily' => 'Familia A'
    ));

    DB::table('families')->insert(array(
      'nameFamily' => 'Familia B'
    ));

    DB::table('families')->insert(array(
      'nameFamily' => 'Familia C'
    ));

    DB::table('families')->insert(array(
      'nameFamily' => 'Familia D'
    ));

    DB::table('families')->insert(array(
      'nameFamily' => 'Familia E'
    ));

    DB::table('families')->insert(array(
      'nameFamily' => 'Familia F'
    ));

    DB::table('families')->insert(array(
      'nameFamily' => 'Familia G'
    ));

    DB::table('families')->insert(array(
      'nameFamily' => 'Familia H'
    ));

    DB::table('families')->insert(array(
      'nameFamily' => 'Familia I'
    ));

    DB::table('families')->insert(array(
      'nameFamily' => 'Familia J'
    ));

    DB::table('families')->insert(array(
      'nameFamily' => 'Familia K'
    ));

    DB::table('families')->insert(array(
      'nameFamily' => 'Familia L'
    ));
	}

}