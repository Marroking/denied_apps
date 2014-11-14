<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('customers', 'CustomersController');
Route::resource('products', 'ProductsController');
Route::resource('incidence_products', 'IncidenceProductsController');
Route::resource('families', 'FamiliesController');
Route::resource('inventories', 'InventoriesController');
Route::resource('business_units', 'BusinessUnitsController');
Route::resource('users', 'UsersController');
Route::resource('product_price_lists', 'ProductPriceListsController');
Route::resource('product_rejects', 'ProductRejectsController');
Route::resource('solve_rejects', 'SolveRejectsController');
Route::resource('rejects', 'RejectsController');
Route::resource('price_lists', 'PriceListsController');