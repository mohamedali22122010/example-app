<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('admin/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset("admin/bower_components/sweetalert/dist/sweetalert.css")}}" rel="stylesheet" type="text/css" />

      <!-- iCheck for checkboxes and radio inputs -->
  	<link rel="stylesheet" href="{{ asset("admin/bower_components/AdminLTE/plugins/iCheck/all.css")}}">
  	<!-- Theme style -->
    <link href="{{ asset("admin/bower_components/AdminLTE/plugins/select2/select2.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("admin/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset("admin/bower_components/selectize/dist/css/selectize.default.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("admin/bower_components/selectize/dist/css/selectize.bootstrap3.css") }}" />

  <link rel="stylesheet" href="{{asset('admin/bower_components/AdminLTE/plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/AdminLTE/plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/AdminLTE/plugins/datepicker/datepicker3.css')}}">

    <link href="{{ asset("admin/css/dropzone.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("admin/css/custom.css")}}" rel="stylesheet" type="text/css" />


    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("admin/bower_components/AdminLTE/dist/css/skins/skin-blue-light.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]--></head>
<body class="skin-blue-light">

<div class="wrapper">

    <!-- Header -->
    @include('includes.header')

    <!-- Sidebar -->
    @include('includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    	<!-- flash message -->
    	@if ($errors && !empty($errors->all()))
			<div class="alert alert-danger alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-danger"></i> {{trans('backend.Alert!')}}</h4>
	            @foreach($errors->all() as $error)
	            	{{ $error }}
	        	@endforeach
			</div>
		@endif
		@if (Session::has('flash_message'))
			<div class="alert alert-success alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-success"></i> {{trans('backend.Success!')}}</h4>
	            {{ Session::get('flash_message') }}
			</div>
		@endif
		@if (Session::has('error'))
			<div class="alert alert-danger alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-danger"></i> {{trans('backend.Error!')}}</h4>
	            {{ Session::get('error') }}
			</div>
		@endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content-header')
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

</div><!-- ./wrapper -->
        
    

<script src="{{ asset ("admin/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("admin/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{{ asset ("admin/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{ asset ("admin/bower_components/AdminLTE/plugins/fastclick/fastclick.min.js")}}"></script>

<!-- AdminLTE App -->
<script src="{{ asset ("admin/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("admin/bower_components/sweetalert/dist/sweetalert.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/admin/js/dropzone.js") }}" type="text/javascript"></script>
<script src="{{ asset ("admin/bower_components/parsleyjs/dist/parsley.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("admin/bower_components/selectize/dist/js/standalone/selectize.min.js") }}"></script>

<script src="{{ asset ("/admin/js/backend.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/admin/js/customScript.js") }}" type="text/javascript"></script>
<script src="{{ asset ("admin/bower_components/jquery/dist/jquery-ui.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/admin/js/parsley.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("admin/bower_components/AdminLTE/plugins/select2/select2.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("admin/bower_components/AdminLTE/plugins/iCheck/icheck.min.js") }}"></script>
<script src="{{ asset ("admin/bower_components/AdminLTE/plugins/chartjs/Chart.min.js") }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

<script src="{{asset("admin/bower_components/AdminLTE/plugins/morris/morris.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{asset("admin/bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js")}}"></script>
<!-- jvectormap -->
<script src="{{asset("admin/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
<script src="{{asset("admin/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset("admin/bower_components/AdminLTE/plugins/knob/jquery.knob.js")}}"></script>
<!-- daterangepicker -->
<script src="{{asset("admin/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js")}}"></script>
<!-- datepicker -->
<script src="{{asset("admin/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js")}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset("admin/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>
<!-- DataTables -->
<script src="{{asset("admin/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("admin/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js")}}"></script>

    @yield('scripts')

</body>

</html>
