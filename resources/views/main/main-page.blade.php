<!DOCTYPE html>
<html lang="en">
	<head>
		@include('layouts.main-layout-head')
	</head>
	
	<body>
		<div id="body-bg">
			@include('layouts.main-layout-header')
			
			<div id="content">
				<div class="container background-white">
					<div class="container">
						<div class="row margin-vert-30">
							<div class="col-md-6 col-md-offset-3 col-sm-offset-3">
								<form class="login-page">
									<div class="login-header margin-bottom-30">
										<h2>Login to your account</h2>
									</div>
									<div class="input-group margin-bottom-20">
										<span class="input-group-addon">
											<i class="fa fa-user"></i>
										</span>
										<input placeholder="Username" class="form-control" type="text">
									</div>
									<div class="input-group margin-bottom-20">
										<span class="input-group-addon">
											<i class="fa fa-lock"></i>
										</span>
										<input placeholder="Password" class="form-control" type="password">
									</div>
									<div class="row">
										<div class="col-md-6">
										</div>
										<div class="col-md-6">
											<button class="btn btn-primary pull-right" type="submit">Login</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			@include('layouts.main-layout-footer')
		</div>
	</body>
</html>