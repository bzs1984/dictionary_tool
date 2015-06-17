@extends('zadmin.layouts.master')

@section('main')
  <div class="main-content">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">字段管理</a></li>
      <li class="active">字段列表</li>
     
    </ol>

    <div class="widget widget-blue">
      <div class="widget-title">
           
        <h3><i class="fa fa-table"></i> 字段列表</h3>
      </div>
      <div class="widget-content">
        <div class="table-responsive">
        <table class="table table-bordered table-hover datatable">
          <thead>
            <tr>
              <th><div class="checkbox"><input type="checkbox"></div></th>
              <th>字段名称</th>
              <th>类型</th>              
              <th>注释</th>
              <th>所属表名</th>
             
              <th>操作</th>
              
            </tr>
          </thead>
          <tbody>
          @foreach ($list as $vo)
            <tr>
              <td><div class="checkbox"><input type="checkbox"></div></td>
              <td>{{$vo->field_name}}</td>
              <td>{{$vo->field_type}}</td>
              <td>{{$vo->field_note}}</td>
              <td><a href="{{ URL::to("zadmin/table/fields/$vo->table_id")}}">{{$vo->table->table_name}}</a></td>
             
            
              
            
               <td>
                <a  href="{{ URL::to("zadmin/field/edit/$vo->id")}}"  class="btn btn-iconed btn-default btn-xs">
                  <i class="fa fa-pencil"></i>  编辑
                </a>

                <a  href="{{ URL::to("zadmin/field/delete/$vo->id")}}" class="btn btn-iconed btn-danger btn-xs">
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