@extends('zadmin.layouts.master')

@section('main')
  <div class="main-content">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="index.html">管理员列表</a></li>
     
      <li class="active">添加管理员</li>
    </ol>
  
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
      

 <form action="{{ URL::to('zadmin/admin/store')}}" method="post" role="form" class="form-horizontal">
        <div class="widget widget-blue">
          <div class="widget-title">

            <h3><i class="fa  fa-table"></i>管理员信息</h3>
          </div>
          <div class="widget-content">
     
              
              <div class="form-group">
                <label>{{ trans('zadmin/admin.username') }} </label>
                <input type="text" class="form-control" name="username"  value="" placeholder="" required>
              </div>

              <div class="form-group">
                <label>{{ trans('zadmin/admin.email') }}</label>
                <input type="email" class="form-control" name="email" value="" placeholder="" required>
              </div>

              <div class="form-group">
                <label>{{ trans('zadmin/admin.password') }}</label>
                <input type="password" class="form-control" name="password" value="" placeholder="" required>
              </div>

               <div class="form-group">
                <label>{{ trans('zadmin/admin.password2') }}</label>
                <input type="password" class="form-control" name="password2" value="" placeholder="" required>
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
              </div>

              <div class="form-group">
                <label>{{ trans('zadmin/admin.rolegroup') }}</label>
                
              @foreach ($lists as $key => $list)
              <div class="radio">
                <label>
                  <input type="radio" name="role_id" value="{{$list->id}}" {{$key ==0 ? 'checked':'' }} >
                  {{$list->role_name}}
                </label>
              </div>
              @endforeach
              
              </div>


             
              
              
             
           <div class="form-group">
                <div class="col-md-offset-4 col-md-8">
                  <button type="submit" class="btn btn-primary">提交</button>
                </div>
              </div>
             
         
        

          
          </div>
        
           </form>
        </div>

      
      </div>
 
    </div>
  </div>
@stop

@section('js')
<script src='{{ $static }}assets/js/template_js/form_validation.js'></script>
@stop