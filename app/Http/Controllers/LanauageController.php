<?php namespace App\Http\Controllers;

use Redirect;


class LanauageController extends Controller {

	



	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getEn()
	{
		\Session::put('lang','en');
		

		return Redirect::back();

	}

	public function getCn()
	{
		\Session::put('lang','cn');
		return Redirect::back();
	}

}
