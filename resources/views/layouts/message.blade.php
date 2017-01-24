@if (Session::has('error'))
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title">Error</h3>
		</div>
		<div class="panel-body">
			@if(!is_array(Session::get('error')))
				{{ Session::get('error') }}
			@else
				@foreach (Session::get('error') as $error)
					{{ $error }} <br>
				@endforeach
			@endif
		</div>
	</div>
@elseif(Session::has('message'))
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Success</h3>
		</div>
		<div class="panel-body">
			@if(!is_array(Session::get('message')))
				{{ Session::get('message') }}
			@else
				@foreach (Session::get('message') as $message)
					{{ $message }} <br>
				@endforeach
			@endif
		</div>
	</div>
@endif
