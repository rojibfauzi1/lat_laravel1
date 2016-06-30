<?php

class ArticleController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['data_article'] = Article::with('Author')->paginate(2);
		/*$data = Article::paginate(2);*/
		return View::make('article.index',$data);
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$author1['tambah_author'] = \DB::table('authors')->lists('username','id');
		$author1['id_author'] = \DB::table('authors')->lists('id');

		return View::make('article.add',$author1)->with('authors',$author1);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$article = new Article();
		$article->judul = Input::get('judul');
		$article->body = Input::get('isi');
		$article->author_id = Input::get('author');
		$article->save();

		return Redirect::to('article');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
