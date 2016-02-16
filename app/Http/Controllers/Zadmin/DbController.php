<?php namespace App\Http\Controllers\Zadmin;

use App\Http\Controllers\Controller as Controller;
use App\Models\DbsModel as D;
use App\Models\TablesModel as T;
use App\Models\FieldsModel as F;
use Request;
use Schema;
use DB;
use Config;

class DbController extends Controller {


    protected static $sider = [
                               0=>['txt'=>'数据库列表','link'=>'/zadmin/db/index','style'=>''],
                               1=>['txt'=>'添加数据库','link'=>'/zadmin/db/add',  'style'=>'']
                              ];

    private $redirect = '/zadmin/db/index';
   
    public function getIndex()
    {
        
        self::$sider[0]['style'] = 'current';
        $list = D::pageList(null,10);

        $data['list']  = $list;
        $data['sider'] = self::$sider;
        return view('zadmin.dbs.index',$data);
    }


   
    
    public function getAdd()
    {
     
        $data['sider'] = self::$sider;
        return view('zadmin.dbs.add',$data);
    }

    public function getEdit($id)
    {
        $data['vo']    = D::getOne($id);
        $data['sider'] = self::$sider;
        return view('zadmin.dbs.edit',$data);
    }

     public function getTables($dbId)
    {
        
        $data['list']  = T::getListByDb($dbId,25);
        $data['sider'] = self::$sider;
        return view('zadmin.dbs.table',$data);
    }

    public function postUpdate()
    {
        $id   =  Request::get('id');
        $data =  Request::except('_token','id');       
        
        $flag =  D::modify($id,$data);

        if($flag)
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'success', 'txt'=>'修改成功']]);
        }else
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'danger', 'txt'=>'修改失败']]);
        }
    }

    public function postStore()
    {
        $data =  Request::except('_token');       
        
        $flag =  D::store($data);

        if($flag)
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'success', 'txt'=>'添加成功']]);
        }else
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'danger', 'txt'=>'添加失败']]);
        }
    }

   

    public function getDelete($id)
    {
        $flag = Vendor::removed($id);
        if($flag)
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'success', 'txt'=>'删除成功']]);
        }else
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'danger', 'txt'=>'删除失败']]);
        }
    }

    // 初始化数据字典 根据数据库名导入所有的表名和字段
    public function getInit($db_id=1)
    {
        $db = D::find($db_id);
        $db->imported = 1;
        $db->save();
        $flag = 0;

        // 截断表 id从1重新开始
         // DB::table('tables')->truncate(); 
         // DB::table('fields')->truncate();
         Config::set('database.connections.mysql_dic.database',$db->db_name); 
         Config::set('database.connections.mysql_dic.host',$db->host);
         Config::set('database.connections.mysql_dic.username',$db->username);
         Config::set('database.connections.mysql_dic.password',$db->password);
         
        // 通过遍历获得所有的表        
        $tables  = DB::connection('mysql_dic')->select('SHOW TABLE STATUS');
        //dd($tables);
        foreach ($tables as  $v)
        {
            
            $data['db_id']     = 1;
            $data['table_name']= $v->Name;
            $data['table_note']= $v->Comment;
            $flag = T::store($data);

            $columns =  DB::connection('mysql_dic')->select('SHOW FULL FIELDS FROM '.$v->Name); 
            foreach ($columns as  $vo)
            {
                $field['table_id']   = $flag->id;
                $field['field_name'] = $vo->Field;
                $field['field_type'] = $vo->Type;
                $field['field_note'] = $vo->Comment;
                $f = F::store($field);
            }
           
        }

        if($flag)
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'success', 'txt'=>'源数据库导入成功']]);
        }else
        {
            return redirect($this->redirect)->with(['msg'=>['type'=>'danger', 'txt'=>'源数据库导入失败']]);
        }
       
    }


}
