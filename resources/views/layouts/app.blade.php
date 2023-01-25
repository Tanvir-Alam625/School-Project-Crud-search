{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Student-info</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('assets')}}/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets')}}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('assets')}}/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="{{asset('assets')}}/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('assets')}}/css/demo_1/style.css">
  <!-- End layout styles -->
  <!-- Summernote CSS - CDN Link -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
   {{-- select2 CDN CSS-link  --}}
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   {{-- for sweet alert  --}}
	<link rel="stylesheet" href="sweetalert2.min.css">

</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="{{url('/')}}" class="sidebar-brand">
          BPI<span>Student Info</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">All Students</span>
            </a>
          </li>
		  {{-- ======================== --}}
		  {{-- start the routes  --}}
		  {{-- ======================== --}}
          {{-- <li class="nav-item nav-category">Pages</li> --}}
		  {{-- ======================== --}}
		  {{-- start the user route  --}}
		  {{-- ======================== --}}
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Students</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav sub-menu">
                @if (Auth::user()->role === 'admin')
                <li class="nav-item">
					<a href="{{route('student.index')}}" class="nav-link">All Students</a>
				  </li>
                @endif
              </ul>
            </div>
          </li> --}}
		   {{-- ======================== --}}
		  {{-- end the user route  --}}
		  {{-- admin user routes  start --}}
		  {{-- ======================== --}}
		  {{-- @if (Auth::user()->role === 'admin') --}}
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" role="button" aria-expanded="false" aria-controls="category">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">Category</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="category">
              <ul class="nav sub-menu">
				<li class="nav-item">
					<a href="{{ route('categories.create')}}" class="nav-link">Create a new Category</a>
				  </li>
				<li class="nav-item">
					<a href="{{ route('categories.index')}}" class="nav-link">All Categories</a>
				  </li>
				</ul>
            </div>
		</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#post" role="button" aria-expanded="false" aria-controls="post">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">Post</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="post">
              <ul class="nav sub-menu">
				<li class="nav-item">
					<a href="{{ route('post.create')}}" class="nav-link">Create a new Post</a>
				  </li>
				<li class="nav-item">
					<a href="{{ route('post.index')}}" class="nav-link">All Posts</a>
				  </li>
				</ul>
            </div>
		</li>
		<li class="nav-item nav-category">
			<a href="{{route('tag.index')}}" class="nav-link">
				<i class="link-icon" data-feather="tag"></i>
				<span class="link-title">Tags</span>
			</a>
		</li> --}}
		{{-- @endif --}}
          {{-- admin user routes  end --}}
        </ul>
      </div>
    </nav>
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					{{-- <form class="search-form">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i data-feather="search"></i>
								</div>
							</div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form> --}}
					<ul class="navbar-nav">
						{{-- <li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">{{Auth::user()->name}}</p>
										<p class="email text-muted mb-3">{{Auth::user()->email}}</p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="pages/general/profile.html" class="nav-link">
												<i data-feather="user"></i>
												<span>Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="edit"></i>
												<span>Edit Profile</span>
											</a>
										</li>
										
										<li class="nav-item">
                                            <form action="{{ url('/logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="nav-link border-0 bg-transparent">
                                                    <i data-feather="log-out"></i>
                                                    <span>Log Out</span>
                                                </button>
                                            </form>
										</li>
									</ul>
								</div>
							</div>
						</li> --}}
					</ul>
				</div>
			</nav>
			<!-- partial -->
            <div class="page-content">
                @yield('content')
            </div>
			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2023 <a href="https://www.nobleui.com" target="_blank">BPI Student Info</a>. All rights reserved</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('assets')}}/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{asset('assets')}}/vendors/chartjs/Chart.min.js"></script>
  <script src="{{asset('assets')}}/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="{{asset('assets')}}/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="{{asset('assets')}}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="{{asset('assets')}}/vendors/apexcharts/apexcharts.min.js"></script>
  <script src="{{asset('assets')}}/vendors/progressbar.js/progressbar.min.js"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{asset('assets')}}/vendors/feather-icons/feather.min.js"></script>
	<script src="{{asset('assets')}}/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="{{asset('assets')}}/js/dashboard.js"></script>
  <script src="{{asset('assets')}}/js/datepicker.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- end custom js for this page -->
	{{-- select2 CDN Jquery-Link  --}}
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	for sweet alert 
	<script src="sweetalert2.min.js"></script>
	@yield('script')
</body>
</html>    



