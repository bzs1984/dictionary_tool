<?php namespace App\Http\Controllers\Zadmin;

use App\Http\Controllers\Controller as Controller;
use App\Models\TablesModel as T;

use App\Models\FieldsModel as F;
use Request;
use DB;

class FieldController extends Controller {


    protected static $sider = [
                               0=>['txt'=>'字段列表','link'=>'/zadmin/field/index','style'=>''],
                               1=>['txt'=>'添加字段','link'=>'/zadmin/field/add',  'style'=>'']
                              ];

    private $redirect = '/zadmin/field/index';
   
    public function getIndex()
    {
        
        self::$sider[0]['style'] = 'current';
        $list = F::pageList(null,15);
        //dd($list);
        $data['list']  = $list;
        $data['sider'] = self::$sider;
        return view('zadmin.fields.index',$data);
    }


    public function  getAdd()
    {
        // 获取所有数据类型
        $sql = 'SELECT DATA_TYPE FROM information_schema.COLUMNS GROUP BY DATA_TYPE';
        $data['types']           = DB::select($sql);        
        $data['tables']          = T::getList(120);
        self::$sider[1]['style'] = 'current';
        $data['sider']           = self::$sider;
        return view('zadmin.fields.add',$data);
    }


    public function getEdit($id)
    {
        $data['vo']    = F::getOne($id);
      
        $data['sider'] = self::$sider;
        return view('zadmin.fields.edit',$data);
    }

    public function getFields($tableId)
    {
        $data['list']  = F::getListByTable($tableId,50);
        $data['sider'] = self::$sider;
        return view('zadmin.fields.field',$data);
    }

    public function getAddfields($tableId)
    {
        $data['sider'] = self::$sider;
        return view('zadmin.fields.addfield',$data);
    }

   

    public function postStore()
    {
        $data =  Request::except('_token');  

        $tableName = T::find($data['table_id'])->pluck('table_name');

        $field_name   = $data['field_name'];
        $field_type   = $data['field_type'];
        $field_length = $data['field_length'];
        $field_note   = $data['field_note'];
        
        $sql = "ALTER TABLE `".$tableName."` ADD  `".$field_name."` ".$field_type."(".$field_length.")  COMMENT '".$field_note."' ";        
        DB::connection('mysql_dic')->statement($sql);   
       
        $flag =  F::store($data);
        if($flag)
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'success', 'txt'=>'添加成功']]);
        }else
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'danger', 'txt'=>'添加失败']]);
        }
        
    }

    public function postUpdate()
    {
        $id   =  Request::get('id');
        $data =  Request::except('_token','id');

        $tableName = T::find($data['table_id'])->pluck('table_name');

        $field_name = $data['field_name'];
        $field_type = $data['field_type'];
        $field_note = $data['field_note'];
        $sql = "ALTER TABLE `".$tableName."` Change `".$field_name."` `".$field_name."` ".$field_type."  COMMENT '".$field_note."' ";        
        DB::connection('mysql_dic')->statement($sql);
        $flag =  F::modify($id,$data);

        if($flag)
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'success', 'txt'=>'修改成功']]);
        }else
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'danger', 'txt'=>'修改失败']]);
        }
    }

    public function getDelete($id)
    {
        $flag = T::removed($id);
        if($flag)
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'success', 'txt'=>'删除成功']]);
        }else
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'danger', 'txt'=>'删除失败']]);
        }
    }


}
