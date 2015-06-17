<?php namespace App\Services;

use App\Models\Admin;
use Illuminate\Routing\Controller;
use Validator;


class AdminService extends Controller {

    /**
     * @param null $username
     * @param null $password
     * @param string $salt
     * @return array('secret' ,'salt');
     * if have $salt then return secret pwd,else make salt and secret pwd
     */

    public static function adminSecret($password,$salt)
    {     
        $secret = md5($password.$salt);        
        return $secret;
    }

}
