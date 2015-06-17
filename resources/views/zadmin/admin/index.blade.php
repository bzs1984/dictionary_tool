@extends('zadmin.layouts.master')

@section('main')
  <div class="main-content">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">管理员列表</li>
   
     
    </ol>

     <div class="row">
      <div class="col-md-12">
        <div class="widget" id="widget_stats">
          <div class="widget-title">

            <h3><i class="fa fa-bar-chart-o"></i> 角色权限</h3>
          </div>
          <div class="widget-content button-example">
           
            <a href="{{  URL::to('zadmin/role/add') }}" class="btn btn-success  btn-sm">添加角色</a>
            <a href="{{  URL::to('zadmin/admin/add') }}" class="btn btn-primary btn-sm">添加管理员</a>
         
          
          </div>
        </div>
      </div>

    </div>

      @if (Session::has('msg'))
          <div class="alert alert-{{ Session::get('msg')['type'] }} alert-dismissable" >
              <i class="fa fa-times-circle"></i> {{ Session::get('msg')['txt'] }}
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          </div>
      @endif

      <div class="widget widget-blue">
      <div class="widget-title">
           
        <h3><i class="fa fa-table"></i> 管理员列表</h3>
      </div>
      <div class="widget-content">
        <div class="table-responsive">
        <table class="table table-bordered table-hover datatable">
          <thead>
            <tr>
             
              
              <th>用户名</th>              
              <th>邮箱</th> 
              <th>最后登录</th>            
                          
              <th>操作</th>
              
            </tr>
          </thead>
          <tbody>
          
           <?php foreach ($list as $vo): ?> 
            <tr>              
              <td>{{$vo->username}}</td>            
              <td>{{$vo->email}}</td>
              <td>2015-05-20 12:20:30</td>
              
             
               <td>
                {{--<a  href="admin_rank.html"  class="btn btn-iconed btn-default btn-xs">
                  <i class="fa fa-pencil"></i>  权限
                </a>--}}
                 <a  href="admin_log.html"  class="btn btn-iconed btn-default btn-xs">
                  <i class="fa fa-pencil"></i>  日志
                </a>
                 <a  href="{{URL::to('zadmin/admin/edit',$vo->id)}}"  class="btn btn-iconed btn-default btn-xs">
                  <i class="fa fa-pencil"></i>  编辑
                </a>
                <a  href="{{URL::to('zadmin/admin/destory',$vo->id)}}" class="btn btn-iconed btn-danger btn-xs">
                 <i class="fa fa-times"></i> 移除
                </a>
              </td>
            </tr>

            <?php endforeach; ?>
          

       

            
           
           
          </tbody>
        </table>
        </div>
        <?php echo $list->render(); ?>
      </div>
    </div>
  </div>
@stop

