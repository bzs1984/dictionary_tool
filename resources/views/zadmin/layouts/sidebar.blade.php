<div class="side">
    <div class="sidebar-wrapper">
    <ul>
    <!--系统设置-->  
      <li {{ ($ctrName=='IndexController')? 'class=current':''}} >
        <a class='current' href="{{  URL::to('zadmin/index') }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dashboard">
          <i class="fa fa-home"></i>
        </a>
      </li>

      <!--数据库管理-->
      <li {{ ($ctrName=='OrderController')? 'class=current':''}} >
        <a href="{{  URL::to('zadmin/db') }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="数据库管理">
         
          <i class="fa fa-inbox"></i>
        </a>
      </li>

     

      

      <!--数据表管理-->
      <li {{ ($ctrName=='BranchController')? 'class=current':''}}>
        <a href="{{  URL::to('zadmin/table') }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="数据表管理">
          <i class="fa fa-file-text-o "></i>
        </a>
      </li>

    
      <!--字段管理-->
    <li {{ ($ctrName=='AdminController')? 'class=current':''}}>
      <a href="{{URL::to('zadmin/field')}}" data-toggle="tooltip" data-placement="right" title="字段管理" data-original-title="字段管理">
        <i class="fa fa-ticket"></i>
      </a>
    </li>

       
     
    </ul>
  </div>
  <div class="sub-sidebar-wrapper">
    <ul class="nav">
    
    @foreach ($sider as $vo)
      <li class="{{$vo['style']}}"><a href="{{url($vo['link'])}}">{{$vo['txt']}}</a></li>     
    @endforeach 
    </ul>
  </div>
</div>