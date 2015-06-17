@extends('zadmin.layouts.master')

@section('main')
  <div class="main-content">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="index.html">店铺管理</a></li>
     
      <li class="active">添加店铺</li>
    </ol>
  
  <div class="row">
      <div class="col-md-9">
      


        <div class="widget widget-blue">
          <div class="widget-title">

            <h3><i class="fa  fa-table"></i>店铺信息</h3>
          </div>
          <div class="widget-content">
            <form action="{{ URL::to('zadmin/db/store')}}" role="form" id="validateForm" method="post">
              
             <div class="form-group">
                <label>数据库名称</label>
                <input type="text" name="db_name" class="form-control"  value="" placeholder="" required>
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
<script src='{{ $static }}assets/js/template_js/form_validation.js'></script>
@stop


