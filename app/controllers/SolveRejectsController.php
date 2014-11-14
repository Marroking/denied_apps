<?php

class SolveRejectsController extends \BaseController {

	/**
	 * Display a listing of solve_rejects
	 *
	 * @return Response
	 */
	public function index()
	{
		$solve_rejects = SolveReject::all();

		return View::make('solve_rejects.index', compact('solve_rejects'));
	}

	/**
	 * Show the form for creating a new solvereject
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('solve_rejects.create');
	}

	/**
	 * Store a newly created solvereject in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), SolveReject::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		SolveReject::create($data);

		return Redirect::route('solve_rejects.index');
	}

	/**
	 * Display the specified solvereject.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$solvereject = SolveReject::findOrFail($id);

		return View::make('solve_rejects.show', compact('solvereject'));
	}

	/**
	 * Show the form for editing the specified solvereject.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$solvereject = SolveReject::find($id);

		return View::make('solve_rejects.edit', compact('solvereject'));
	}

	/**
	 * Update the specified solvereject in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$solvereject = SolveReject::findOrFail($id);

		$validator = Validator::make($data = Input::all(), SolveReject::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$solve_rejects->update($data);

		return Redirect::route('solve_rejects.index');
	}

	/**
	 * Remove the specified solvereject from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		SolveReject::destroy($id);

		return Redirect::route('solve_rejects.index');
	}

}
