<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App;
use View;
use App\http\Helper;
use Route;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	public function __construct()
	{
	 	  //dd(Route::currentRouteAction());
        $ctrName = Helper::getControllerName(Route::currentRouteAction());
        View::share('ctrName', $ctrName);
     
	}

}
