@extends('zadmin.layouts.master')

@section('main')
  <div class="main-content">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="{{url('zadmin/db/index')}}">源数据库管理</a></li>
     
      <li class="active">添加源数据库</li>
    </ol>
  
  <div class="row">
      <div class="col-md-9">
      


        <div class="widget widget-blue">
          <div class="widget-title">

            <h3><i class="fa  fa-table"></i>数据库信息</h3>
          </div>
          <div class="widget-content">
            <form action="{{ URL::to('zadmin/db/store')}}" role="form" id="validateForm" method="post">
              
             <div class="form-group">
                <label>数据库地址</label>
                <input type="text" name="host" class="form-control"  value="" placeholder="" required>
              </div>
             <div class="form-group">
                <label>数据库名称</label>
                <input type="text" name="db_name" class="form-control"  value="" placeholder="" required>
              </div>
              <div class="form-group">
                <label>用户名</label>
                <input type="text" name="username" class="form-control"  value="" placeholder="" required>
              </div>
              <div class="form-group">
                <label>密码</label>
                <input type="text" name="password" class="form-control"  value="" placeholder="" >
              </div>
               <div class="form-group">
                <label>注释</label>
                <input type="text" name="db_note" class="form-control" value="" placeholder="" required>
              </div>
              
              
              <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
              <button type="submit" class="btn btn-primary">提交</button>
             
            </form>
          </div>

        </div>

      
      </div>
 
    </div>
  </div>
@stop

@section('js')
<script src='/assets/js/template_js/form_validation.js'></script>
@stop


