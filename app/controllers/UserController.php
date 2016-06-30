<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Mengambil semua data user
		$data['daftar_user'] = User::all();

		return View::make('user/list',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user/add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user1 = new User();
		$user1->username = Input::get('name');
		$user1->email = Input::get('email');
		$user1->password = md5(Input::get('password'));
		$user1->alamat = Input::get('alamat');
		$user1->save();

		return Redirect::to('user');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_user)
	{
		$data['data_user'] = User::find($id_user);
		return View::make('user/detail',$data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_user)
	{
		$data['data_user'] = User::find($id_user);
		return View::make('user/edit',$data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user2 = User::find($id);

		$user2->username = Input::get('name');
		$user2->email = Input::get('email');
		$user2->password = md5(Input::get('password'));
		$user2->alamat = Input::get('alamat');
		$user2->save();

		return Redirect::to('user');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_user)
	{
		$user3 = User::find($id_user);

		$user3->delete();

		return Redirect::to('user');
	}


}
