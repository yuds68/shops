<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		@include('layouts.main-layout-head')
	</head>
	<body>
		<div id="wrapper">
			@include('layouts.main-layout-header')
			@include('layouts.main-layout-menu')
			@yield('content')
			@include('layouts.main-layout-footer')
		</div>
	</body>
</html>