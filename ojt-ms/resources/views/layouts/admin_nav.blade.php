<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" href={{ asset('able/images/OMS.svg') }} type="image/x-icon">

    <link rel="stylesheet" href={{ asset('able/css/able.css') }}>
	<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet"> 
	<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

</head>
<body class="background-grd-dark">

    <!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>

    <!-- [ Pre-loader ] End -->
    <nav class="pcoded-navbar menupos-fixed menu-light brand-blue">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="{{ asset('able/images/user/avatar.jpg') }}">
						<div class="user-details">
							<div id="more-details"> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="{{route('a-profile')}}" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
                            <li class="list-inline-item">
                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                
                                <a href="#" data-toggle="tooltip" title="Logout" class="text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="feather icon-power"></i>
                                </a>
                            </li>
                        </ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
						<a href="{{route('admin-dashboard')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
                    <li class="nav-item">
						<a href="{{route('a-profile')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-check-square"></i></span><span class="pcoded-mtext">Profile</span></a>
					</li>

                    <li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Students</span></a>
						<ul class="pcoded-submenu">
							<li><a href="{{route('a-showStudentList')}}">Student List</a></li>
							<li><a href="{{route('a-createStudent')}}">Add Student</a></li>
							<li><a href="{{route('a-showStudentRequests')}}">Registration Requests</a></li>
						</ul>
					</li>

                    <li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-mail"></i></span><span class="pcoded-mtext">Admins</span></a>
						<ul class="pcoded-submenu">
							<li><a href="{{route('a-showAdminList')}}">Admin List</a></li>
							<li><a href="{{route('a-createAdmin')}}">Add an Admin</a></li>
						</ul>
					</li>

					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-mail"></i></span><span class="pcoded-mtext">Companies</span></a>
						<ul class="pcoded-submenu">
							<li><a href="{{route('a-showCompanyList')}}">Company List</a></li>
							<li><a href="{{route('a-createCompany')}}">Add a company</a></li>
							<li><a href="{{route('a-createCompany')}}">Add a department</a></li>
						</ul>
					</li>
                 
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Sample Item</span></a>
						<ul class="pcoded-submenu">
							<li class="pcoded-hasmenu"><a href="#!">Vertical</a>
								<ul class="pcoded-submenu">
									<li><a href="{{ url('/admin/students') }}" target="_blank">Static</a></li>
									<li><a href="{{ url('/admin/students') }}" target="_blank">Fixed</a></li>
									<li><a href="{{ url('/admin/students') }}" target="_blank">Navbar fixed</a></li>
									<li><a href="{{ url('/admin/students') }}" target="_blank">Collapse menu</a></li>
									<li><a href="{{ url('/admin/students') }}" target="_blank">Vertical RTL</a></li>
								</ul>
							</li>
							<li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
							<li><a href="layout-dark.html" target="_blank">Dark layout <span class="pcoded-badge badge badge-danger">Hot</span></a></li>
						</ul>
					</li>

                    {{-- <li class="nav-item">
						<a href="{{route('add-admin')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Add Admin</span></a>
					</li> --}}
				</ul>
				
			</div>
		</div>
	</nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                
                <img src="{{ asset('able/images/logo.png') }}" alt="" class="logo">
                
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
    </header>   
    <!-- [ Header ] end -->
    
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-header">
            </div>

			{{-- CONTENTS should start with row divs --}}
			@yield('content')	

        </div>
    </div>

    <!-- [ Main Content ] end -->

<!-- Required Js -->

<script src="{{ asset('able/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('able/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('able/js/ripple.js') }}"></script>
<script src="{{ asset('able/js/pcoded.min.js') }}"></script>
<script src="{{ asset('able/js/menu-setting.min.js') }}"></script>

<script src="{{ asset('able/js/plugins/sweetalert.min.js') }}"></script>
<script src="{{ asset('able/js/pages/ac-alert.js') }}"></script>

@yield('scripts')

</body>
</html>