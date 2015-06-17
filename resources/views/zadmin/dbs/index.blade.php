@extends('zadmin.layouts.master')

@section('main')
  <div class="main-content">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">数据库管理</a></li>
      <li class="active">数据库列表</li>
     
    </ol>


    @if (Session::has('msg'))
              <div class="alert alert-{{ Session::get('msg')['type'] }} alert-dismissable">
                <i class="fa fa-times-circle"></i> {{ Session::get('msg')['txt'] }}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              </div>
    @endif  
    <div class="widget widget-blue">
      <div class="widget-title">
           
        <h3><i class="fa fa-table"></i> 数据库列表</h3>
      </div>
      <div class="widget-content">
        <div class="table-responsive">
        <table class="table table-bordered table-hover datatable">
          <thead>
            <tr>
             
              <th>数据库名称</th>
              <th>注释</th>              
                        
              <th>操作</th>
              
            </tr>
          </thead>
          <tbody>
          <?php foreach ($list as $vo): ?>  
            <tr>
             
              <td>{{ $vo->db_name }}</td>
              <td>{{ $vo->db_note }}</td>
             
            
               <td>
                 <a  href="{{ url('/zadmin/db/tables',$vo->id)}}"  class="btn btn-iconed btn-default btn-xs">
                  <i class="fa fa-pencil"></i>  数据表
                </a>
                <a  href="{{url('/zadmin/db/edit',$vo->id) }}"  class="btn btn-iconed btn-default btn-xs">
                  <i class="fa fa-pencil"></i>  编辑
                </a>

               
              </td>
            </tr>
             <?php endforeach; ?>
           
           
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
@stop