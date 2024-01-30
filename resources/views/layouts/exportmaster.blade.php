<!DOCTYPE html>
<html lang="en">
    
		<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
		<meta name="author" content="ST1 - Bootstrap Admin Template">
		<meta name="robots" content="noindex, nofollow">
        <title>Report</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ url ('public/img/favicon.png') }}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ url ('public/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ url ('public/css/font-awesome.min.css') }}">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{ url ('public/css/line-awesome.min.css') }}">
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="{{ url ('public/plugins/morris/morris.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ url ('public/css/style.css') }}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="public/js/html5shiv.min.js"></script>
			<script src="public/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
        <!-- Main Wrapper -->
        <div class="main-wrapper">
            @yield('content')
            <!-- /Page Wrapper -->
        </div>
        <!-- /Main Wrapper -->
    </body>
    </html>