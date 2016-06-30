<?php

class AuthorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['data_author'] = Author::paginate(4);

		return View::make('author.index',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('author.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$author = new Author();
		$author->username = Input::get('username');
		$author->bio = Input::get('bio');
		$author->save();

		Session::flash('message','Data berhasil ditambahkan');
		return Redirect::to('author');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data['data_author'] = Author::find($id);
		return View::make('author.edit',$data);


	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$author = Author::find($id);
		$author->username = Input::get('username');
		$author->bio = Input::get('bio');
		$author->save();

		return Redirect::to('author');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$author = Author::find($id);

		$author->delete();

		return Redirect::to('author');
	}


}
