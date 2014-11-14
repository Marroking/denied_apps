<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RejectsTableSeeder extends Seeder {

	public function run()
	{
  	DB::table('rejects')->insert(array(
      'nameReject' => 'Rechazo 1'
    ));

    DB::table('rejects')->insert(array(
      'nameReject' => 'Rechazo 2'
    ));

    DB::table('rejects')->insert(array(
      'nameReject' => 'Rechazo 3'
    ));
	}

}