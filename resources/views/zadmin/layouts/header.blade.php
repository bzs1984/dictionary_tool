  <header>
  <div class="page-header">
  <div class="header-links hidden-xs">
  
   
    
   

    <div class="dropdown">
      <a href="#" class="header-link clearfix" data-toggle="dropdown">
       
        <div class="user-name-w">
          {{Session::get('admin')->username}} <i class="fa fa-caret-down"></i>
        </div>
      </a>
      <ul class="dropdown-menu dropdown-inbar">

        <li><a href="{{  URL::to('zadmin/logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
      </ul>
    </div>
  </div>
  <a class="current logo hidden-xs" href="index.html"><i class="fa fa-rocket"></i></a>
  <a class="menu-toggler" href="{{  URL::to('zadmin/logout') }}"><i class="fa fa-bars"></i></a>
  <h1>Dashboard</h1>
</div>
</header>