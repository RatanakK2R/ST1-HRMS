<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Login - HRMS</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/img/favicon.png') }}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ url('public/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ url ('public/css/font-awesome.min.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<!-- <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a> -->
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
                        <a href="index.php"><img src="{{ url('public/img/logo2.png') }}" alt="Company Logo"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to our dashboard</p>
							
							<!-- Account Form -->
							<form action="{{ url('login') }}" method="post">
                                {{ csrf_field() }}
								<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" required name="email" type="email" placeholder="example@example.com">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
									</div>
									<input class="form-control" required name="password" type="password">
								</div>
                                <br>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" name="login" type="submit">Login</button>
								</div>
								<br>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label></label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="#">
												Forgot password?
											</a>
										</div>
									</div>
								</div>
								<div class="account-footer">
									<p>Having Trouble? report an issue on github <a target="#" href="https://github.com/RatanakK2R">Github issues</a></p>
								</div>
								 {{-- <div class="col-auto">
									<a class="text-muted float-right" href="#">
										Forgot password?
									</a>
								</div> 

								<br>
								<div class="account-footer">
									<p>Having Trouble? report an issue on github <a target="#" href="#">Github issues</a></p>
								</div> --}}
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{ url('public/js/jquery-3.2.1.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ url('public/js/popper.min.js') }}"></script>
        <script src="{{ url('public/js/bootstrap.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('public/js/app.js') }}"></script>
		
    </body>
</html>