@extends('zadmin.layouts.master')

@section('main')
  <div class="main-content">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">数据表管理</a></li>
      <li class="active">数据表列表</li>
     
    </ol>

    <div class="widget widget-blue">
      <div class="widget-title">
           
        <h3><i class="fa fa-table"></i> 数据表列表</h3>
      </div>
      <div class="widget-content">
        <div class="table-responsive">
        <table class="table table-bordered table-hover datatable">
          <thead>
            <tr>
              <th><div class="checkbox"><input type="checkbox"></div></th>
           
              <th>表名</th>
              <th>注释</th>              
              <th>所属数据库</th>
            
              <th>操作</th>
              
            </tr>
          </thead>
          <tbody>
          @foreach ($list as $vo)
            <tr>
              <td><div class="checkbox"><input type="checkbox"></div></td>
              <td>{{$vo->table_name}}</td>
              <td>{{$vo->table_note}}</td>
              <td>{{$vo->db->db_name}}</td>
             
            
            
            
               <td>
                <a  href="{{ URL::to("zadmin/table/fields/$vo->id")}}"  class="btn btn-iconed btn-default btn-xs">
                  <i class="fa fa-pencil"></i>  字段列表
                </a>
                <a  href="{{ URL::to("zadmin/table/addfields/$vo->id")}}"  class="btn btn-iconed btn-default btn-xs">
                  <i class="fa fa-pencil"></i>  添加字段
                </a>
                <a  href="{{ URL::to("zadmin/table/edit/$vo->id")}}"  class="btn btn-iconed btn-default btn-xs">
                  <i class="fa fa-pencil"></i>  编辑
                </a>

                <a  href="{{ URL::to("zadmin/table/reimport/$vo->id")}}"  class="btn btn-iconed btn-default btn-xs">
                  <i class="fa fa-pencil"></i>  重新导入
                </a>

                <a  href="{{ URL::to("zadmin/table/delete/$vo->id")}}" class="btn btn-iconed btn-danger btn-xs">
                 <i class="fa fa-times"></i> 移除
                </a>
              </td>
            </tr>
          @endforeach


       

            
           
           
          </tbody>
        </table>
        </div>
         <?php echo $list->render(); ?>
      </div>
    </div>
  </div>
</div>


@stop