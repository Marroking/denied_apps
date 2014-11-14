<?php

class FamiliesController extends \BaseController {

	/**
	 * Display a listing of families
	 *
	 * @return Response
	 */
	public function index()
	{
		$families = Family::all();

		return View::make('families.index', compact('families'));
	}

	/**
	 * Show the form for creating a new family
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('families.create');
	}

	/**
	 * Store a newly created family in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Family::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Family::create($data);

		return Redirect::route('families.index');
	}

	/**
	 * Display the specified family.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$family = Family::findOrFail($id);

		return View::make('families.show', compact('family'));
	}

	/**
	 * Show the form for editing the specified family.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$family = Family::find($id);

		return View::make('families.edit', compact('family'));
	}

	/**
	 * Update the specified family in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$family = Family::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Family::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$family->update($data);

		return Redirect::route('families.index');
	}

	/**
	 * Remove the specified family from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Family::destroy($id);

		return Redirect::route('families.index');
	}

}
