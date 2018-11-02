<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
  	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon.png') }}">
  	<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin - Reservasi Salon</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	  <!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link href="{{asset('css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
</head>
<body>
	@include('admin.master.header')
	@include('admin.master.sidebar')
	@yield('content')
	@include('admin.master.footer')
	
	<!--   Core JS Files   -->
  	<script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  	<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  	<script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  	<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  	<!--  Notifications Plugin    -->
	<script src="../assets/js/plugins/bootstrap-notify.js"></script>
	<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
	@yield('script')
</body>
</html>