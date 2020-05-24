
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mobile Admin</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap-responsive.min.css')}}" />
	<link rel="stylesheet" href="{{ asset('public/css/uniform.css')}}" />
	<link rel="stylesheet" href="{{ asset('public/css/select2.css')}}" />
	<link rel="stylesheet" href="{{ asset('public/css/matrix-style.css')}}" />
	<link rel="stylesheet" href="{{ asset('public/css/matrix-media.css')}}" />
	<link href="{{ asset('public/font-awesome/css/font-awesome.css" rel="stylesheet')}}" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	
	<style type="text/css">
		ul.pagination{
			list-style: none;
			float: right;
		}
		ul.pagination li.active{
			font-weight: bold
		}
		ul.pagination li{
		  float: left;
		  display: inline-block;
		  padding: 10px
		}
		
	</style>
	@if (Auth::check())
	@if( Auth::user()->level == 1)
	<style>
		body {
			background:#1f262d;
		}
		#header {
	background-color: #1f262d;
   margin-top:10px;
}</style>
		@elseif( Auth::user()->level == 2)
		<style>
			body {
				background:#753705;
			}
			#header {
	background-color: #753705;
   margin-top:10px;
}</style>
		@endif
									
		@endif
</head>
<body>
	
<!--Header-part-->
<div id="header">
	<h1><a href="dashboard.php">Dashboard</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
	<ul class="nav">
		<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome</span><b class="caret"></b></a>
			
		</li>
			
		</li>
		<li class=""><a title="" href="logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
	</ul>
</div>

<!--start-top-serch-->
<div id="search">
	<form action="search" method="post">
		@csrf
	<input type="text" placeholder="Search here..." name="search"/>
	<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</form>
</div>
<!--close-top-serch-->

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
	<ul>
		<li> <a href="{{URL::route('nhanvien')}}"><i class="icon icon-th-list"></i> <span>Nhân viên</span></a></li>
        <li> <a href="{{URL::route('phongban')}}"><i class="icon icon-th-list"></i> <span>Phòng ban</span></a></li>
		<li> <a href="{{URL::route('baohiemyte')}}"><i class="icon icon-th-list"></i> <span>Bảo hiểm y tế</span></a></li>
		<li> <a href="{{URL::route('bangluong')}}"><i class="icon icon-th-list"></i> <span>Bảng lương</span></a></li>
		<li> <a href="{{URL::route('quaylai')}}"><i class="icon icon-th-list"></i> <span> B</span></a></li>







	</ul>
</div>


@yield('content')

<script src="public/js/laracrud.js"></script>


<div class="row-fluid">
</div>
<!--end-Footer-part-->

<script src="public/js/jquery.min.js"></script>
<script src="public/js/jquery.ui.custom.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery.uniform.js"></script>
<script src="public/js/select2.min.js"></script>
<script src="public/js/jquery.dataTables.min.js"></script>
<script src="public/js/matrix.js"></script>
<script src="public/js/matrix.tables.js"></script>
</body>
</html>
