<?php namespace App\Http\Controllers\Zadmin;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Support\Facades\Session;
use App\Http\Helper;
use Config;
use Request;
use View;
use Input;
use Route;
use App\Models\DbsModel      as Order;
use App\Models\TablesModel   as Customer;
use App\Models\FieldsModel   as Ticket;



class IndexController extends Controller {

	
	protected static $sider = [
							   0=>['txt'=>'数据库管理',  'link'=>'/zadmin/db',           'style'=>''],
			  				   1=>['txt'=>'数据表管理',  'link'=>'/zadmin/table/index',    'style'=>''],
			  				   2=>['txt'=>'字段管理',    'link'=>'/zadmin/field/index',   'style'=>''],
			  				   3=>['txt'=>'初始化',      'link'=>'/zadmin/db/init',       'style'=>''],
			  				 
							  ];

	
	

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		
		
		
		$data['sider'] = self::$sider;
		return view('zadmin.index',$data);
	}

	

   

   

}
