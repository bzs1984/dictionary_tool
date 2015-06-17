<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
       

<link rel='stylesheet' href='../assets/css/plugins/fullcalendar.css'>
<link rel='stylesheet' href='../assets/css/plugins/datatables/datatables.css'>
<link rel='stylesheet' href='../assets/css/plugins/datatables/bootstrap.datatables.css'>
<link rel='stylesheet' href='../assets/css/plugins/chosen.css'>
<link rel='stylesheet' href='../assets/css/plugins/jquery.timepicker.css'>
<link rel='stylesheet' href='../assets/css/plugins/daterangepicker-bs3.css'>
<link rel='stylesheet' href='../assets/css/plugins/colpick.css'>
<link rel='stylesheet' href='../assets/css/plugins/dropzone.css'>
<link rel='stylesheet' href='../assets/css/plugins/jquery.handsontable.full.css'>
<link rel='stylesheet' href='../assets/css/plugins/jscrollpane.css'>
<link rel='stylesheet' href='../assets/css/plugins/jquery.pnotify.default.css'>
<link rel='stylesheet' href='../assets/css/plugins/jquery.pnotify.default.icons.css'>
<link rel='stylesheet' href='../assets/css/app.css'>

 
  <link href="../assets/favicon.ico" rel="shortcut icon">
  <link href="../assets/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>后台管理-添加角色信息</title>

</head>

<body class="glossed">

<div class="all-wrapper fixed-header left-menu">
  <div class="page-header">
  <div class="header-links hidden-xs">
    <div class="top-search-w pull-right">
      <input type="text" class="top-search" placeholder="Search"/>
    </div>
    <div class="dropdown hidden-sm hidden-xs">
      <a href="#" data-toggle="dropdown" class="header-link"><i class="fa fa-bolt"></i> User Alerts <span class="badge alert-animated">5</span></a>

      <ul class="dropdown-menu dropdown-inbar dropdown-wide">
        <li><a href="#"><span class="label label-warning">1 min</span> <i class="fa fa-bell"></i> New Mail Received</a></li>
        <li><a href="#"><span class="label label-warning">4 min</span> <i class="fa fa-fire"></i> Server Crash</a></li>
        <li><a href="#"><span class="label label-warning">12 min</span> <i class="fa fa-flag-o"></i> Pending Alert</a></li>
        <li><a href="#"><span class="label label-warning">15 min</span> <i class="fa fa-smile-o"></i> User Signed Up</a></li>
      </ul>
    </div>
   
    <div class="dropdown">
      <a href="#" class="header-link clearfix" data-toggle="dropdown">
        <div class="avatar">
          <img src="../assets/images/avatar-small.jpg" alt="">
        </div>
        <div class="user-name-w">
          Lionel Messi <i class="fa fa-caret-down"></i>
        </div>
      </a>
      <ul class="dropdown-menu dropdown-inbar">
        <li><a href="#"><span class="label label-warning">2</span> <i class="fa fa-envelope"></i> Messages</a></li>
        <li><a href="#"><span class="label label-warning">4</span> <i class="fa fa-users"></i> Friends</a></li>
        <li><a href="#"><i class="fa fa-cog"></i> Account Settings</a></li>
        <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
      </ul>
    </div>
  </div>
  <a class="logo hidden-xs" href="index.html"><i class="fa fa-rocket"></i></a>
  <a class="menu-toggler" href="#"><i class="fa fa-bars"></i></a>
  <h1>Dashboard</h1>
</div>
  <div class="side">
  <div class="sidebar-wrapper">
  <ul>
   <!--系统设置-->  
    <li >
      <a  href="../index.html" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dashboard">
        <i class="fa fa-home"></i>
      </a>
    </li>

    <!--订单管理-->
    <li>
      <a href="../order/index.html" data-toggle="tooltip" data-placement="right" title="" data-original-title="订单管理">
        <span class="badge">5</span>
        <i class="fa fa-file-text-o"></i>
      </a>
    </li>

    <!--客户管理-->
    <li>
      <a href="../customer/index.html" data-toggle="tooltip" data-placement="right" title="" data-original-title="客户管理">
        <span class="badge"></span>
        <i class="fa fa-user"></i>
      </a>
    </li>

    <!--客服管理-->
    <li>
      <a href="../callcenter/index.html" data-toggle="tooltip" data-placement="right" title="" data-original-title="客服管理">
        <i class="fa fa-comment-o"></i>
      </a>
    </li>

    <!--商品管理-->
    <li>
      <a href="../goods/index.html" data-toggle="tooltip" data-placement="right" title="" data-original-title="商品管理">
        <i class="fa  fa-shopping-cart"></i>
      </a>
    </li>

    <!--员工管理-->
    <li>
      <a href="../staff/index.html" data-toggle="tooltip" data-placement="right" title="" data-original-title="员工管理">
        <i class="fa fa-sitemap"></i>
      </a>
    </li>

    <!--角色管理-->
    <li>
      <a href="index.html" data-toggle="tooltip" data-placement="right" title="" data-original-title="角色管理">
        
        <i class="fa fa-anchor"></i>
      </a>
    </li>

    <!--门店管理-->
    <li class='current'>
      <a href="index.html" data-toggle="tooltip" data-placement="right" title="" data-original-title="店铺管理">
        <i class="fa fa-map-marker"></i>
      </a>
    </li>
  </ul>
</div>
  <div class="sub-sidebar-wrapper">
  <ul>
    <li><a href="index.html"> 角色列表</a></li>
    <li class='current'><a  href="add.html"> 添加角色</a></li>
  
  </ul>
</div>
  </div>
  <div class="main-content">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="admin_rank.html">权限分配</a></li>
     
      
    </ol>
  
  <div class="row">
      <div class="col-md-9">
      

 <form action="admin_index.html" role="form" class="form-horizontal">
        <div class="widget widget-blue">
          <div class="widget-title">

            <h3><i class="fa  fa-table"></i>权限信息</h3>
          </div>
         
          
          <div class="widget-content">
         
             
              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">订单管理</label>
                  <div class="col-md-8">
                    <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox1"  value="option1"> 订单查看
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2"  value="option2"> 订单编辑
                </label>
                 <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 添加订单
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox3" value="option3"> 删除订单
                </label>
                   
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">客服管理</label>
                  <div class="col-md-8">
                    <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox1" value="option1"> 查看
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 录入
                 </label> 
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 修改
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox3" value="option3"> 删除
                </label>
                   
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">产品管理</label>
                  <div class="col-md-8">
                    <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox1" value="option1"> 查看
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 录入
                 </label> 
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 修改
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox3" value="option3"> 删除
                </label>
                   
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">客户管理</label>
                  <div class="col-md-8">
                    <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox1" value="option1"> 查看
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 录入
                 </label> 
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 修改
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox3" value="option3"> 删除
                </label>
                   
                  </div>
                </div>
              </div>

               <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">员工管理</label>
                  <div class="col-md-8">
                    <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox1" value="option1"> 查看
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 录入
                 </label> 
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 修改
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox3" value="option3"> 删除
                </label>
                   
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">店铺管理</label>
                  <div class="col-md-8">
                    <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox1" value="option1"> 查看
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 录入
                 </label> 
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 修改
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox3" value="option3"> 删除
                </label>
                   
                  </div>
                </div>
              </div>

               <div class="form-group">
                <div class="row">
                  <label class="col-md-4 control-label">角色管理</label>
                  <div class="col-md-8">
                    <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox1" value="option1"> 查看
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 录入
                 </label> 
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 修改
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox3" value="option3"> 删除
                </label>
                   
                  </div>
                </div>
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
</div>


<script src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src='../assets/js/plugins/jquery.pnotify.js'></script>
<script src='../assets/js/plugins/jquery.sparkline.min.js'></script>
<script src='../assets/js/plugins/mwheelIntent.js'></script>
<script src='../assets/js/plugins/mousewheel.js'></script>
<script src='../assets/js/bootstrap/tab.js'></script>
<script src='../assets/js/bootstrap/dropdown.js'></script>
<script src='../assets/js/bootstrap/tooltip.js'></script>
<script src='../assets/js/bootstrap/collapse.js'></script>
<script src='../assets/js/bootstrap/scrollspy.js'></script>
<script src='../assets/js/plugins/bootstrap-datepicker.js'></script>
<script src='../assets/js/bootstrap/transition.js'></script>
<script src='../assets/js/plugins/jquery.knob.js'></script>
<script src='../assets/js/plugins/jquery.flot.min.js'></script>
<script src='../assets/js/plugins/fullcalendar.js'></script>
<script src='../assets/js/plugins/datatables/datatables.min.js'></script>
<script src='../assets/js/plugins/chosen.jquery.min.js'></script>
<script src='../assets/js/plugins/jquery.timepicker.min.js'></script>
<script src='../assets/js/plugins/daterangepicker.js'></script>
<script src='../assets/js/plugins/colpick.js'></script>
<script src='../assets/js/plugins/moment.min.js'></script>
<script src='../assets/js/plugins/datatables/bootstrap.datatables.js'></script>
<script src='../assets/js/bootstrap/modal.js'></script>
<script src='../assets/js/plugins/raphael-min.js'></script>
<script src='../assets/js/plugins/morris-0.4.3.min.js'></script>
<script src='../assets/js/plugins/justgage.1.0.1.min.js'></script>
<script src='../assets/js/plugins/jquery.maskedinput.min.js'></script>
<script src='../assets/js/plugins/jquery.maskmoney.js'></script>
<script src='../assets/js/plugins/summernote.js'></script>
<script src='../assets/js/plugins/dropzone-amd-module.js'></script>
<script src='../assets/js/plugins/jquery.validate.min.js'></script>
<script src='../assets/js/plugins/jquery.bootstrap.wizard.min.js'></script>
<script src='../assets/js/plugins/jscrollpane.min.js'></script>
<script src='../assets/js/application.js'></script>

<script src='../assets/js/template_js/form_validation.js'></script>


</body>

</html>