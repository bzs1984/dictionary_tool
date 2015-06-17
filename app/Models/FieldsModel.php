<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FieldsModel extends Model  {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'fields';

	
    protected $guarded = ['id'];

    public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	

    public function table()
    {
        return $this->belongsTo('App\Models\TablesModel');
    }


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

    static function getListByTable($tableId,$num=10)
    {
        $list =  static::where('table_id',$tableId)->paginate($num);
        
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
        $flag = static::delete($id);
        return $flag;

    }

    static function deletByTableId($tableId)
    {
        $flag = static::where('table_id',$tableId)->delete();
        return $flag;

    }

}
