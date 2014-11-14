<?php

class RejectsController extends \BaseController {

	/**
	 * Display a listing of rejects
	 *
	 * @return Response
	 */
	public function index()
	{
		$rejects = Reject::all();

		return View::make('rejects.index', compact('rejects'));
	}

	/**
	 * Show the form for creating a new reject
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('rejects.create');
	}

	/**
	 * Store a newly created reject in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Reject::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Reject::create($data);

		return Redirect::route('rejects.index');
	}

	/**
	 * Display the specified reject.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$reject = Reject::findOrFail($id);

		return View::make('rejects.show', compact('reject'));
	}

	/**
	 * Show the form for editing the specified reject.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$reject = Reject::find($id);

		return View::make('rejects.edit', compact('reject'));
	}

	/**
	 * Update the specified reject in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$reject = Reject::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Reject::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$reject->update($data);

		return Redirect::route('rejects.index');
	}

	/**
	 * Remove the specified reject from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Reject::destroy($id);

		return Redirect::route('rejects.index');
	}

}
