<!DOCTYPE html>
<html lang="en">
	<head>
		@include('layouts.main-layout-head')
	</head>

	<body>
		<div id="body-bg">
			@include('layouts.main-layout-header')
			@include('layouts.main-layout-menu')
			
			<div id="content">
				<div class="container background-white">
					<div class="row margin-vert-40">
						@yield('content')
					</div>
				</div>
			</div>
			@include('layouts.main-layout-footer')
		</div>
	</body>
</html>