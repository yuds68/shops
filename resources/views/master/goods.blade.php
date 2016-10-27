@extends('layouts.main-layout')
@section('content')
	<div class="col-md-12">
		<h2>Parameter</h2>
		
		<form class="signup-page margin-bottom-30">
			<div class="row">
				<div class="col-sm-2">
					<label>Field</label>
				</div>
				<div class="col-sm-4">
					<input class="form-control margin-bottom-20" type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<label>Field</label>
				</div>
				<div class="col-sm-4">
					<input class="form-control margin-bottom-20" type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-search"></i> Cari
					</button>
				</div>
			</div>
		</form>
		
		<div class="tabs">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#data" data-toggle="tab">Data</a>
				</li>
			</ul>
			
			<div class="tab-content">
				<div class="tab-pane fade in active" id="data">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Username</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
