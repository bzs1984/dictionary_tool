<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
        
      

<link rel='stylesheet' href='{{ $static }}assets/css/plugins/fullcalendar.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/plugins/datatables/datatables.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/plugins/datatables/bootstrap.datatables.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/plugins/chosen.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/plugins/jquery.timepicker.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/plugins/daterangepicker-bs3.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/plugins/colpick.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/plugins/dropzone.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/plugins/jquery.handsontable.full.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/plugins/jscrollpane.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/plugins/jquery.pnotify.default.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/plugins/jquery.pnotify.default.icons.css'>
<link rel='stylesheet' href='{{ $static }}assets/css/app.css'>

 

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>Responsive Admin template based on Bootstrap 3</title>

</head>

<body class="glossed">

<div class="all-wrapper fixed-header left-menu">
       
         @include('zadmin.layouts.header')     
         @include('zadmin.layouts.sidebar')

       @yield('main')
        <!--main content end-->
     
      @include('zadmin.layouts.footer')

     @yield('js')
    <!--Load these page level functions-->
   

</div>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
