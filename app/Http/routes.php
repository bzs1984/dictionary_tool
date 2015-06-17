<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





/*
 *后台路由
 * Controller method not found
 * Routes are registered from top to the bottom. If any match is found,
 * that matching callback is executed,
 * Laravel does not continue in lookup.
 * Home route "/" should be placed as last one, as this says there is nothing more to lookup
 */
Route::group([
				'prefix' => 'zadmin',
				'namespace' => 'Zadmin',
				
			],
			function() {
						Route::get('login',    'LoginController@login');	
						Route::post('logdo',   'LoginController@logDo');
						Route::get('logout',   'LoginController@logOut');

						Route::group(['middleware' => 'zadmin'], function()
						{
							Route::controller('table',  'TableController');
							Route::controller('field',  'FieldController');
							Route::controller('db',     'DbController');
							
							Route::controller('/',        	   'IndexController' );
						});
});


