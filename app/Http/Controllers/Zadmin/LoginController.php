<?php namespace App\Http\Controllers\Zadmin;

use App\Http\Controllers\Controller as Controller;
use Session;
use Validator;
use Request;
use Input;
use App\Models\AdminModel AS Admin;
use App\Services\AdminService;
use Gregwar\Captcha\CaptchaBuilder;


class LoginController extends Controller {

	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function login()
	{
		$builder = new CaptchaBuilder;
		$data['captcha'] = $builder->build();
		Session::put('phrase',$builder->getPhrase());  
		
		return view('zadmin.login',$data);

	}

	public function logDo()
	{
		
		// $captcha = Input::get('captcha');
		// if($captcha == Session::get('phrase')) {
  //           dd('chengogn');
		// }
		// else {
		//    return redirect('zadmin/login')->with(['msg'=>'Login Faild!']);
		// }
		
		$v = Validator::make(Request::all(), [
	        'username' => 'required|max:50',
	        'password' => 'required',
    	]);    	

    	if ($v->fails())
    	{
        	return redirect()->back()->withErrors($v->errors());
    	}else
    	{
    		$username = Input::get('username');
	        $password = Input::get('password');
	        $user     = Admin::getUserByUsename($username);

	        if($user)
	        {
	            $secret   = AdminService::adminSecret($password, $user->salt);
	            $password =  $secret;
	            if($password != $user->password)
	            {
	            	return redirect('zadmin/login')->with(['msg'=>'Login Faild!']);
	        	}	           
	        }else
	        {
	            return redirect('zadmin/login')->with(['msg'=>'Login Faild!']);
	        }

	        
	        Session::put('admin',$user);    		
    		return redirect('zadmin/index');
    	}


	}

    public function logOut()
    {
        Session::flush();
        return redirect('zadmin/login');
    }

    
}
