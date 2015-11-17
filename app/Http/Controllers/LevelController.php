<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\level;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
class LevelController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data= \App\level::all();
		return view('level/all')->withData($data);	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data= \App\level::all();
		return view('level/add')->withData($data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$addnew = new \App\level;
		$addnew->parent = is_null(input::get('parent'))?0:Input::get('parent');
		$addnew->nama = input::get('nama');
		$addnew->posisi = input::get('posisi');
		$addnew->save();

		return redirect(url('level'));
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function view()
	{
		$data = \App\level::all();
		return view('level.view')->withData($data);
	}

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
