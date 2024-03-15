
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1,
			shrink-to-fit=no">
		<meta name="description" content="Responsive Admin &amp; Dashboard Template
			based on Bootstrap 5">
		<meta name="author" content="AdminKit">
		<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin,
			dashboard, template, responsive, css, sass, html, theme, front-end, ui kit,
			web">

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="shortcut icon" href="{{asset('admin/img/icons/icon-48x48.png')}}" />

		<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html"
			/>

		<title>@yield('title')</title>

		<link href="{{asset('admin/css/app.css')}}" rel="stylesheet">
		<link href="{{asset('admin/css/toastr.min.css')}}" rel="stylesheet" >
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap"
			rel="stylesheet">
		@livewireStyles
	</head>

	<body>
		<div class="wrapper">
			@include('livewire.admin.components.sidebar')

			<div class="main">
				@include('livewire.admin.components.navbar')

                <!-- @yield('content') -->

				@include('livewire.admin.components.footer')
			</div>
		</div>

		{{-- Scripts --}}
		<script src="{{asset('admin/js/app.js')}}"></script>
		<script src="{{asset('admin/js/jquery.min.js')}}"></script>
		<script src="{{asset('admin/js/toastr.min.js')}}"></script>
		@livewireScripts
	</body>
</html>