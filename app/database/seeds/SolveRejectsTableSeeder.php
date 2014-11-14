<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SolveRejectsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('solve_rejects')->insert(array(
      'IdUser' => 1
    ));

    DB::table('solve_rejects')->insert(array(
      'IdUser' => 2
    ));

    DB::table('solve_rejects')->insert(array(
      'IdUser' => 3
    ));
	}

}