<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DbsModel extends Model {

	
    protected $table = 'dbs';


   
    protected $guarded = ['id'];
    public $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	
	static function getOne($id)
    {
        $data  = static::find($id);
        return $data;
    }

    static function pageList($map=null,$num=15)
    {
    	$list =  static::paginate($num);
    	
    	return $list;
    }

    static function getList($map=null,$num=15)
    {
        $list =  static::take($num)->get();
      
        return $list;
    }

    static function store($data)
    {
    	$flag = static::create($data);
    	return $flag;
    }


    static function modify($id,$data)
    {
    	
        $flag = static::where('id', $id)->update($data);    

        return $flag;
       
    }

    static function removed($id)
    {
        $flag = static::destroy($id);
        return $flag;

    }


}
