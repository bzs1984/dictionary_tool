<?php namespace App\Http\Controllers\Zadmin;

use App\Http\Controllers\Controller as Controller;
use App\Models\AdminModel as Admin;
use App\Services\AdminService;
use Request;
use Validator;
use App\Models\RoleModel;

class AdminController extends Controller {

    protected static $sider = [
        0=>['txt'=>'管理员列表','link'=>'index','style'=>''],
      
        1=>['txt'=>'添加管理员', 'link'=>'add','style'=>''],
        2=>['txt'=>'角色列表',   'link'=>'../role/index',  'style'=>''],
        3=>['txt'=>'添加角色',   'link'=>'../role/add',  'style'=>'']
    ];
	

	// /**
	//  * Create a new controller instance.
	//  *
	//  * @return void
	//  */
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$list = Admin::pageList(null,10);
        $sider = self::$sider;
        return view('zadmin.admin.index')->with(compact('sider','list'));
	}

    public function  getAdd()
    {
        $lists = RoleModel::get(['id','role_name']);
        $sider = self::$sider;
        return view('zadmin.admin.add')->with(compact('sider','lists'));
    }

    public function getEdit($id)
    {
        $admin = Admin::find($id,['id','username','email','role_id','branch_id']);
        if(!$admin){
            $message = '';
            return redirect('/zadmin/admin/index')->with(['msg'=>['type'=>'danger', 'txt'=>$messages]]);
        }
        $lists = RoleModel::get(['id','role_name']);
        $sider = self::$sider;
        return view('zadmin.admin.edit')->with(compact('sider','lists'));
    }



    public function postStore()
    {

        $requests = Request::all();
        //dd($requests);

        $rules = [
            'username' => 'required|between:3,50|unique:admins,username',
            'email' => 'required|email|unique:admins,email',
            'password'=>'required|between:6,50',
            'password2'=>'same:password'
        ];



        $validator = Validator::make($requests, $rules);

        if($validator->fails()){
            $messages = $validator->messages()->first();
            return redirect('/zadmin/admin/index')->with(['msg'=>['type'=>'danger', 'txt'=>$messages]]);
        }

        $sider = self::$sider;

        $salt = str_random(32);
        $password = AdminService::adminSecret(Request::get('password'), $salt);

        $data = [
          'username'    =>  Request::get('username'),
          'email'    =>  Request::get('email'),
          'password'    =>  $password,
            'role_id'   =>  Request::get('rold_id'),
        ];


        $flag = Admin::add($data);

        if($flag)
        {
            return redirect('zadmin/admin/index')->with(['msg'=>['type'=>'success', 'txt'=>'添加成功']]);
        }else
        {
            return redirect('zadmin/admin/index')->with(['msg'=>['type'=>'danger', 'txt'=>'添加失败']]);
        }




    }

    public function postUpdate()
    {

    }

    public function postDestory()
    {

    }

}
