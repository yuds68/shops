<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		
		<div class="navbar-brand">{{ \Config::get('constants.COMPANY') }}</div>
	</div>
	
	<div class="header-right">
		<h4>
			@if(Request::segment(1) == 'master')
				Master
			@elseif(Request::segment(1) == 'parameter')
				Parameter
			@elseif(Request::segment(1) == 'transaction')
				Transaction
			@elseif(Request::segment(1) == 'report')
				Report
			@endif
		</h4>
	</div>
</nav>