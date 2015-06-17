@extends('zadmin.layouts.master')

@section('main')



<div class="main-content">
  
<div class="alert alert-warning alert-dismissable bottom-margin">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <i class="fa fa-exclamation-circle"></i> <strong>hello!</strong> 有<a href="order/index.html">5条订单</a>信息等待处理哦
</div>  


    <div class="widget widget-blue">
      <span class="offset_anchor" id="stat_charts_anchor"></span>
      <div class="widget-title">

        <h3><i class="fa fa-bar-chart-o"></i> 信息统计</h3>
      </div>
      <div class="widget-content">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 text-center">
            <div class="widget-content-blue-wrapper changed-up">
              <div class="widget-content-blue-inner padded">
                <div class="pre-value-block"><i class="fa fa-dashboard"></i> Total order</div>
                <div class="value-block">
                  <div class="value-self"><a href="{{url('zadmin/order')}}">232</a></div>
                
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 text-center">
            <div class="widget-content-blue-wrapper changed-up">
              <div class="widget-content-blue-inner padded">
                <div class="pre-value-block"><i class="fa fa-user"></i> Total customer</div>
                <div class="value-block">
                  <div class="value-self"><a href="{{url('zadmin/customer')}}">2323</a></div>
                 
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 text-center hidden-md">
            <div class="widget-content-blue-wrapper changed-up">
              <div class="widget-content-blue-inner padded">
                <div class="pre-value-block"><i class="fa fa-sign-in"></i> Total ticket</div>
                <div class="value-block">
                  <div class="value-self"><a href="{{url('zadmin/ticket')}}">23332</a></div>
                  
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 text-center">
            <div class="widget-content-blue-wrapper changed-up">
              <div class="widget-content-blue-inner padded">
                <div class="pre-value-block"><i class="fa fa-money"></i>Total goods</div>
                <div class="value-block">
                  <div class="value-self"><a href="{{url('zadmin/goods')}}">33</a></div>
                 
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="row">
  <div class="col-md-6">
    <div class="widget widget-green">
      <div class="widget-title">

        <h3><i class="fa fa-user"></i> 订单备注</h3>
      </div>
      <div class="widget-content">
        <ul class="users-list">
      
         
        </ul>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="widget widget-green">
      <span class="offset_anchor" id="widget_server_activity"></span>
      <div class="widget-title">

        <h3><i class="fa fa-warning"></i> 操作记录</h3>
      </div>
      <div class="widget-content">
        <ul class="activity-list">
          <li>
            <div class="row">
              <div class="col-xs-9"><p><i class="fa fa-bell activity-image"></i> You have 5 pending alerts for account</p></div>
              <div class="col-xs-3 text-right"><span class="activity-time">5 min</span></div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-xs-9"><p><i class="fa fa-fire activity-image"></i> Server crash happened <span class="label label-danger">warning</span></p></div>
              <div class="col-xs-3 text-right"><span class="activity-time">8 min</span></div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-xs-9"><p><i class="fa fa-flag-o activity-image"></i> You have 5 pending alerts for account</p></div>
              <div class="col-xs-3 text-right"><span class="activity-time">12 min</span></div>
            </div>
          </li>
         
          <li>
            <div class="row">
              <div class="col-xs-9"><p><i class="fa fa-smile-o activity-image"></i> New user registration <span class="label label-success">great</span></p></div>
              <div class="col-xs-3 text-right"><span class="activity-time">15 min</span></div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-xs-9"><p><i class="fa fa-bell activity-image"></i> You have 5 pending alerts for account</p></div>
              <div class="col-xs-3 text-right"><span class="activity-time">25 min</span></div>
            </div>
          </li>
           <li>
            <div class="row">
              <div class="col-xs-9"><p><i class="fa fa-smile-o activity-image"></i> New user registration <span class="label label-success">great</span></p></div>
              <div class="col-xs-3 text-right"><span class="activity-time">15 min</span></div>
            </div>
          </li>
           <li>
            <div class="row">
              <div class="col-xs-9"><p><i class="fa fa-smile-o activity-image"></i> New user registration <span class="label label-success">great</span></p></div>
              <div class="col-xs-3 text-right"><span class="activity-time">15 min</span></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

</div>
</div>
@stop

 