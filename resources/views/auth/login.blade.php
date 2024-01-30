@extends('layouts.app')
@section('content')
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
@endsection