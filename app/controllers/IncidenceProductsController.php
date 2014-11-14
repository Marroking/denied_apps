<?php

class IncidenceProductsController extends \BaseController {

	/**
	 * Display a listing of incidenceproducts
	 *
	 * @return Response
	 */
	public function index()
	{
		$incidence_products = IncidenceProduct::all();

		return View::make('incidence_products.index', compact('incidence_products'));
	}

	/**
	 * Show the form for creating a new incidenceproduct
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('incidence_products.create');
	}

	/**
	 * Store a newly created incidenceproduct in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), IncidenceProduct::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		IncidenceProduct::create($data);

		return Redirect::route('incidence_products.index');
	}

	/**
	 * Display the specified incidenceproduct.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$incidence_product = IncidenceProduct::findOrFail($id);

		return View::make('incidence_products.show', compact('incidence_product'));
	}

	/**
	 * Show the form for editing the specified incidenceproduct.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$incidence_product = IncidenceProduct::find($id);

		return View::make('incidence_products.edit', compact('incidence_product'));
	}

	/**
	 * Update the specified incidenceproduct in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$incidence_product = IncidenceProduct::findOrFail($id);

		$validator = Validator::make($data = Input::all(), IncidenceProduct::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$incidenceproduct->update($data);

		return Redirect::route('incidence_products.index');
	}

	/**
	 * Remove the specified incidenceproduct from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		IncidenceProduct::destroy($id);

		return Redirect::route('incidence_products.index');
	}

}
