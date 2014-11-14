<?php

class ProductPriceListsController extends \BaseController {

	/**
	 * Display a listing of productpricelists
	 *
	 * @return Response
	 */
	public function index()
	{
		$product_price_lists = ProductPriceList::all();

		return View::make('product_price_lists.index', compact('product_price_lists'));
	}

	/**
	 * Show the form for creating a new productpricelist
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('product_price_lists.create');
	}

	/**
	 * Store a newly created productpricelist in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), ProductPriceList::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		ProductPriceList::create($data);

		return Redirect::route('product_price_lists.index');
	}

	/**
	 * Display the specified productpricelist.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$product_price_lists = ProductPriceList::findOrFail($id);

		return View::make('product_price_lists.show', compact('product_price_lists'));
	}

	/**
	 * Show the form for editing the specified productpricelist.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product_price_lists = ProductPriceList::find($id);

		return View::make('product_price_lists.edit', compact('product_price_lists'));
	}

	/**
	 * Update the specified productpricelist in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$product_price_lists = ProductPriceList::findOrFail($id);

		$validator = Validator::make($data = Input::all(), ProductPriceList::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$product_price_lists->update($data);

		return Redirect::route('product_price_lists.index');
	}

	/**
	 * Remove the specified productpricelist from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ProductPriceList::destroy($id);

		return Redirect::route('product_price_lists.index');
	}

}
