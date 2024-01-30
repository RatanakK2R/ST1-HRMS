<!DOCTYPE html>
<html lang="en">
		<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
		<meta name="author" content="ST1 - Bootstrap Admin Template">
		<meta name="robots" content="noindex, nofollow">
		<title>Login - HRMS</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="account-page">
	
		<!-- Main Wrapper -->
				@yield('content')
		<!-- Main Wrapper -->

		<!-- jQuery -->
        <script src="{{ url ('public/js/jquery-3.2.1.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ url ('public/js/popper.min.js') }}"></script>
        <script src="{{ url ('public/js/bootstrap.min.js') }}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{ url ('public/js/jquery.slimscroll.min.js') }}"></script>
		
		<!-- Chart JS -->
		<script src="{{ url ('public/plugins/morris/morris.min.js') }}"></script>
		<script src="{{ url ('public/plugins/raphael/raphael.min.js') }}"></script>
		<script src="{{ url ('public/js/chart.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url ('public/js/app.js') }}"></script>
		@yield('script')
    </body>
</html>