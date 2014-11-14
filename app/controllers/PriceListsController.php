<?php

class PriceListsController extends \BaseController {

	/**
	 * Display a listing of price_lists
	 *
	 * @return Response
	 */
	public function index()
	{
		$price_lists = PriceList::all();

		return View::make('price_lists.index', compact('price_lists'));
	}

	/**
	 * Show the form for creating a new pricelist
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('price_lists.create');
	}

	/**
	 * Store a newly created pricelist in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), PriceList::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		PriceList::create($data);

		return Redirect::route('price_lists.index');
	}

	/**
	 * Display the specified pricelist.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pricelist = PriceList::findOrFail($id);

		return View::make('price_lists.show', compact('price_lists'));
	}

	/**
	 * Show the form for editing the specified pricelist.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pricelist = PriceList::find($id);

		return View::make('price_lists.edit', compact('pricelist'));
	}

	/**
	 * Update the specified pricelist in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pricelist = PriceListPriceList::findOrFail($id);

		$validator = Validator::make($data = Input::all(), PriceList::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pricelist->update($data);

		return Redirect::route('price_lists.index');
	}

	/**
	 * Remove the specified pricelist from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		PriceList::destroy($id);

		return Redirect::route('price_lists.index');
	}

}
