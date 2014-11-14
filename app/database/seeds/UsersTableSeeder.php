<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->insert(array(
      'nameUser' => 'Miguel Marroquín Estrada',
      'emailUser' => 'marroquin.em93@gmail.com',
      'key' => 'ASVASDASDASDQWESSFDSAF',
      'IdIncidenceProduct' => 1
    ));

    DB::table('users')->insert(array(
      'nameUser' => 'Juan Carlos',
      'emailUser' => 'juan@gmail.com',
      'key' => 'DFDFHDFADSDFGFFSDFDSFS',
      'IdIncidenceProduct' => 2
    ));

    DB::table('users')->insert(array(
      'nameUser' => 'Jose Pérez',
      'emailUser' => 'jose.p@gmail.com',
      'key' => 'HJUERTWEFSDFGFDHJDFGSD',
      'IdIncidenceProduct' => 3
    ));

    DB::table('users')->insert(array(
      'nameUser' => 'PP Pérez',
      'emailUser' => 'PP.p@gmail.com',
      'key' => 'HJUERSDFSFSDFHJDFGSD',
      'IdIncidenceProduct' => 4
    ));

    DB::table('users')->insert(array(
      'nameUser' => 'Juana Pérez',
      'emailUser' => 'juana.p@gmail.com',
      'key' => 'HJUASDAWEFSDFGFDHJDFGSD',
      'IdIncidenceProduct' => 5
    ));

    DB::table('users')->insert(array(
      'nameUser' => 'María Pérez',
      'emailUser' => 'mary.p@gmail.com',
      'key' => 'HJUEASDASDADFGFDHJDFGSD',
      'IdIncidenceProduct' => 6
    ));
	}

}