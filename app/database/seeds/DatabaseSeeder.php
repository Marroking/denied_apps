<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		/*$this->call('BusinessUnitsTableSeeder');
		$this->call('CustomersTableSeeder');
		$this->call('FamiliesTableSeeder');
		/*$this->call('IncidenceProductsTableSeeder');
		$this->call('InventoriesTableSeeder');
		$this->call('PriceListsTableSeeder');
		$this->call('ProductPriceListsTableSeeder');*/
		/*$this->call('ProductRejectsTableSeeder');*/
		$this->call('ProductsTableSeeder');
		/*$this->call('RejectsTableSeeder');
		$this->call('SolveRejectsTableSeeder');
		$this->call('UsersTableSeeder');*/
	}

}
