@extends('zadmin.layouts.master')

@section('main')
  <div class="main-content">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="index.html">字段管理</a></li>
     
      <li class="active">添加字段</li>
    </ol>
  
  <div class="row">
      <div class="col-md-9">
      


        <div class="widget widget-blue">
          <div class="widget-title">

            <h3><i class="fa  fa-table"></i>字段信息</h3>
          </div>
          <div class="widget-content">
           <form action="{{ URL::to('zadmin/field/store')}}" role="form" id="validateForm" method="post">
              
              <div class="form-group">
                <label>字段名称</label>
                <input type="text" name="field_name" class="form-control"  value="" placeholder="" required>
              </div>

              <div class="form-group">
                <label>字段类型</label>
                <input type="text" name="field_type" class="form-control" value="" placeholder="" required>
              </div>
               

              <div class="form-group">
                <label>字段长度</label>
                <input type="text" name="field_length" class="form-control" value="" placeholder="" required>
              </div>
              <div class="form-group">
                <label>字段注释</label>
                <input type="text" name="field_note" class="form-control" value="" placeholder="" required>
              </div>
              <div class="form-group">
                <label>所属表名</label>
                <input type="text"  class="form-control" value="{{$table->table_name}}" disabled="disabled" >
              </div>
             
             
              
              
              <input type="hidden" name="table_id" value="{{ $table->id }}" />
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