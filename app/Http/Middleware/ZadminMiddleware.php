<?php namespace App\Http\Middleware;

use App\Models\RoleModel;
use Closure;
use Session;
use App\Models\ActionsModel;
use App\Models\ActionsGroupModel;
use Illuminate\Support\Facades\Route;

class ZadminMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		
		if(!Session::get('admin'))
		{		
            $msg  = 'ERROR!';   
			Session::flash('msg', $msg);
			return redirect('zadmin\login');
		}
        // $commonAction = [];
        // $freeAction   = [
        //     'App\Http\Controllers\Zadmin\IndexController@getIndex'
        // ];

        // $roleId  	 = RoleModel::getOne(Session::get('admin')->role_id);
        // $roleIds 	 = explode(',',$roleId->actions_group_list);
        // $actionGroup = ActionsGroupModel::whereIn('id',$roleIds)->lists('id');
        // $actions 	 = ActionsModel::whereIn('actions_group', $actionGroup)->lists('actions');

        // $allowAction = array_merge($commonAction, $freeAction, $actions);
        // $allowAction = array_unique($allowAction);
        // $currentAction = Route::currentRouteAction();
        // // if(!in_array($currentAction, $allowAction))
        // // {
        // //     Session::flash('msg', '越权操作');
        // //     return redirect('zadmin\login');
        // // }
		return $next($request);
	}

}
