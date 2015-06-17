<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpSpec\Exception\Exception;

class AdminModel extends Model {

	protected $table = 'admins';
    protected $guarded = ['id'];
	
	static function getUserByUsename($username, $columns = ['*'])
	{
        return static::where(['username'=>$username])->first($columns);
    }

    static function pageList($map=null,$num=15)
    {
    	return static::paginate($num);
    }

    static function add($data){

        try{

            $flag = static::create($data);
            if($flag === false){
                return false;
            }else{
                return true;
            }
        }catch (Exception $e){

        }

    }

}
