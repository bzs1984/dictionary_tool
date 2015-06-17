<?php namespace App\Http\Controllers;

class IndexController extends Controller {

	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('frontend.index');
	}

}
