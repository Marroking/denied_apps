<?php

class BusinessUnitsController extends \BaseController {

	/**
	 * Display a listing of businessunits
	 *
	 * @return Response
	 */
	public function index()
	{
		$business_units = BusinessUnit::all();

		return View::make('business_units.index', compact('business_units'));
	}

	/**
	 * Show the form for creating a new businessunit
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('business_units.create');
	}

	/**
	 * Store a newly created businessunit in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Businessunit::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		BusinessUnit::create($data);

		return Redirect::route('business_units.index');
	}

	/**
	 * Display the specified businessunit.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$business_unit = BusinessUnit::findOrFail($id);

		return View::make('business_units.show', compact('business_units'));
	}

	/**
	 * Show the form for editing the specified businessunit.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$business_unit = BusinessUnit::find($id);

		return View::make('business_units.edit', compact('business_units'));
	}

	/**
	 * Update the specified businessunit in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$business_unit = BusinessUnit::findOrFail($id);

		$validator = Validator::make($data = Input::all(), BusinessUnit::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$businessunit->update($data);

		return Redirect::route('business_units.index');
	}

	/**
	 * Remove the specified businessunit from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		BusinessUnit::destroy($id);

		return Redirect::route('business_units.index');
	}

}
