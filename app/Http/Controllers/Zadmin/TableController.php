<?php namespace App\Http\Controllers\Zadmin;

use App\Http\Controllers\Controller as Controller;
use App\Models\TablesModel as T;
use App\Models\DbsModel as D;
use App\Models\FieldsModel as F;
use Request;
use DB;
class TableController extends Controller {


    protected static $sider = [
                               0=>['txt'=>'数据表列表','link'=>'/zadmin/table/index','style'=>''],
                               1=>['txt'=>'添加数据表','link'=>'/zadmin/table/add',  'style'=>'']
                              ];

    private $redirect = '/zadmin/table/index';
   
    public function getIndex()
    {
        
        self::$sider[0]['style'] = 'current';
        $list = T::pageList(null,15);
        //dd($list);
        $data['list']  = $list;
        $data['sider'] = self::$sider;
        return view('zadmin.tables.index',$data);
    }


    public function  getAdd()
    {
        $data['dbs']             = D::getList(10);
        self::$sider[1]['style'] = 'current';
         $data['sider']          = self::$sider;
        return view('zadmin.tables.add',$data);
    }


    public function getEdit($id)
    {
        $data['vo']    = T::getOne($id);
        $data['dbs']   = D::getList(10);
        $data['sider'] = self::$sider;
        return view('zadmin.tables.edit',$data);
    }

    public function getFields($tableId)
    {
        $data['table'] = T::find($tableId);
        $data['list']  = F::getListByTable($tableId,50);
        $data['sider'] = self::$sider;
        return view('zadmin.tables.field',$data);
    }

    public function getAddfields($tableId)
    {
         $data['table'] = T::find($tableId);
        $data['tableId'] = $tableId;
        $data['sider']   = self::$sider;
        return view('zadmin.tables.addfield',$data);
    }

   

    public function postStore()
    {
        $data =  Request::except('_token');     
        //dd($data);  
        $flag =  T::store($data);
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
        
        $flag =  T::modify($id,$data);

        //修改表结构
        $sql = "ALTER TABLE ".$data['table_name']."  COMMENT '".$data['table_note']."' ";
        DB::connection('mysql_dic')->statement($sql);

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


    // 根据数据表id重新导入该表字段
    public function getReimport($id)
    {
        $flag      = F::deletByTableId($id);
        $tableName = T::find($id)->pluck('table_name');
        //dd($tableName);
        $columns   = DB::connection('mysql_dic')->select('SHOW FULL FIELDS FROM '.$tableName); 
        foreach ($columns as  $vo)
        {
            $field['table_id']   = $id;
            $field['field_name'] = $vo->Field;
            $field['field_type'] = $vo->Type;
            $field['field_note'] = $vo->Comment;
            $f = F::store($field);
        }
        if($flag === false)
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'danger', 'txt'=>'导入失败']]);
        }else
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'success', 'txt'=>'导入成功']]);

        }
    }


}
