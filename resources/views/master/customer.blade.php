@extends('layouts.main-layout')
@section('content')
	<div id="page-wrapper">
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							MASTER CUSTOMER
						</div>
						
						<div class="panel-body">
							<form role="form">
								<div class="form-group">
									<label>Enter Name</label>
									<input class="form-control" type="text">
									<p class="help-block">Help text here.</p>
								</div>
								
								<div class="form-group">
									<label>Enter Email</label>
									<input class="form-control" type="text">
									<p class="help-block">Help text here.</p>
								</div>
								
								<div class="form-group">
									<label>Text area</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
								
								<button type="submit" class="btn btn-info">Send Message </button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
