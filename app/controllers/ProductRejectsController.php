<?php

class ProductRejectsController extends \BaseController {

	/**
	 * Display a listing of productrejects
	 *
	 * @return Response
	 */
	public function index()
	{
		$product_rejects = ProductReject::all();

		return View::make('product_rejects.index', compact('product_rejects'));
	}

	/**
	 * Show the form for creating a new productreject
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('product_rejects.create');
	}

	/**
	 * Store a newly created productreject in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), ProductReject::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		ProductReject::create($data);

		return Redirect::route('product_rejects.index');
	}

	/**
	 * Display the specified productreject.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$product_rejects = ProductReject::findOrFail($id);

		return View::make('product_rejects.show', compact('product_rejects'));
	}

	/**
	 * Show the form for editing the specified productreject.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product_rejects = ProductReject::find($id);

		return View::make('product_rejects.edit', compact('product_rejects'));
	}

	/**
	 * Update the specified productreject in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$product_rejects = ProductReject::findOrFail($id);

		$validator = Validator::make($data = Input::all(), ProductReject::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$productreject->update($data);

		return Redirect::route('product_rejects.index');
	}

	/**
	 * Remove the specified productreject from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ProductReject::destroy($id);

		return Redirect::route('product_rejects.index');
	}

}
