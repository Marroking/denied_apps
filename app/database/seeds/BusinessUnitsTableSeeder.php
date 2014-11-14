<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BusinessUnitsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal ABC',
      'IdSCFather' => '1'
		));

		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal DEF',
      'IdSCFather' => '2'
		));

		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal GHI',
      'IdSCFather' => '3'
		));

		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal JKL',
      'IdSCFather' => '4'
		));

		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal MNO',
      'IdSCFather' => '5'
		));

		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal PQR',
      'IdSCFather' => '6'
		));

		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal STU',
      'IdSCFather' => '7'
		));

		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal VWX',
      'IdSCFather' => '8'
		));

		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal YZA',
      'IdSCFather' => '9'
		));

		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal BCD',
      'IdSCFather' => '10'
		));

		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal EFG',
      'IdSCFather' => '11'
		));

		DB::table('business_units')->insert(array(
      'nameSC' => 'Sucursal HJI',
      'IdSCFather' => '12'
		));
 
	}

}