@extends('zadmin.layouts.master')

@section('main')
  <div class="main-content">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="index.html">数据表管理</a></li>
     
      <li class="active">添加数据表</li>
    </ol>
  
  <div class="row">
      <div class="col-md-9">
      


        <div class="widget widget-blue">
          <div class="widget-title">

            <h3><i class="fa  fa-table"></i>添加数据表</h3>
          </div>
          <div class="widget-content">
           <form action="{{ URL::to('zadmin/table/store')}}" role="form" id="validateForm" method="post">
              
              <div class="form-group">
                <label>表名</label>
                <input type="text" name="table_name" class="form-control"  value="" placeholder="" required>
              </div>

              <div class="form-group">
                <label>注释</label>
                <input type="text" name="table_note" class="form-control" value="" placeholder="" required>
              </div>
              
              <div class="form-group">
                 <label>所属 数据库</label>
                <select class="form-control chosen-select" name="branch_id">
                  @foreach ($dbs as $v)
                  <option value="{{$v->id}}" >{{$v->db_name}}</option>
                  @endforeach
                
               
                </select>
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