@extends('layouts.main-layout')
@section('content')
	<div class="col-md-12">
		<h2 class="margin-bottom-30">Transaksi Pembelian</h2>
		
		<div class="tabs">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#data" data-toggle="tab">Data</a>
				</li>
				<li>
					<a href="#unconfirmed" data-toggle="tab">Belum Konfirmasi</a>
				</li>
				<li>
					<a href="#confirmed" data-toggle="tab">Sudah Konfirmasi</a>
				</li>
			</ul>
			
			<div class="tab-content">
				<div class="tab-pane fade in active" id="data">
					<form class="signup-page">
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
					
					<div class="panel panel-brown margin-top-30">
						<div class="panel-heading">
							<h3 class="panel-title">Data</h3>
						</div>
						<div class="panel-body">
							<form class="signup-page">
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
						
									<div class="text-center">
										<ul class="pagination">
											<li><a href="#">&laquo;</a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li class="active"><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#">&raquo;</a></li>
										</ul>
									</div>
								</div>
							</form>
						
							<div class="row margin-top-10">
								<div class="col-md-12">
									<button class="btn btn-primary" type="submit">
										<i class="fa fa-plus"></i> Tambah
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane fade in" id="unconfirmed">
					<form class="signup-page">
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
					
					<div class="panel panel-brown margin-top-30">
						<div class="panel-heading">
							<h3 class="panel-title">Data</h3>
						</div>
						<div class="panel-body">
							<form class="signup-page">
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
						
									<div class="text-center">
										<ul class="pagination">
											<li><a href="#">&laquo;</a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li class="active"><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#">&raquo;</a></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="tab-pane fade in" id="confirmed">
					<form class="signup-page">
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
					
					<div class="panel panel-brown margin-top-30">
						<div class="panel-heading">
							<h3 class="panel-title">Data</h3>
						</div>
						<div class="panel-body">
							<form class="signup-page">
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
						
									<div class="text-center">
										<ul class="pagination">
											<li><a href="#">&laquo;</a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li class="active"><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#">&raquo;</a></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
