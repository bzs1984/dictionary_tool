<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
       
      


<link rel='stylesheet' href='{{ $static }}assets/css/app.css'>

  <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>

  <link href="assets/favicon.ico" rel="shortcut icon">
  <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>Responsive Admin template based on Bootstrap 3</title>

</head>

<body class="glossed">


<div class="all-wrapper no-menu-wrapper light-bg">
  <div class="login-logo-w">
    <a href="index.html" class="logo">
      <i class="fa fa-rocket"></i>
    </a>
  </div>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">

      <div class="widget widget-blue">
        <div class="widget-title">
          <h3 class="text-center"><i class="fa fa-lock"></i> Login</h3>
        </div>
        <div class="widget-content">
          <form action="{{  URL::to('zadmin/logdo') }}" method="post" role="form">
            @if (Session::has('msg'))
              <div class="alert alert-danger alert-dismissable">
                <i class="fa fa-times-circle"></i> {{ Session::get('msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              </div>
            @endif  
            
            <div class="form-group relative-w">
              <input type="text" name="username" class="form-control" placeholder="Enter username">
              <i class="fa fa-user input-abs-icon"></i>
            </div>
            <div class="form-group relative-w">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <i class="fa fa-lock input-abs-icon"></i>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <button  class="btn btn-primary btn-rounded btn-iconed">
              <span>Log me in</span>
              <i class="fa fa-arrow-right"></i>
            </button>
           
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>



</body>

</html>