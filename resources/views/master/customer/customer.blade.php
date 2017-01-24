@extends('layouts.main-layout')
@section('content')
	<div class="col-md-12">
		<h2>Master Customer</h2>
		
		<form class="signup-page margin-bottom-30">
			<div class="row">
				<div class="col-sm-2">
					<label>Kode Customer</label>
				</div>
				<div class="col-sm-4">
					<input class="form-control margin-bottom-20" type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<label>Nama Customer</label>
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
				<h3 class="panel-title">Data Customer</h3>
			</div>
			<div class="panel-body">
				<form class="signup-page">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Kode Customer</th>
										<th>Nama Customer</th>
										<th>Alamat</th>
										<th>No Telp</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									@foreach($customer as $key => $value)
										<tr>
											<td>{{ $value->kode_customer }}</td>
											<td>{{ $value->nama_customer }}</td>
											<td>{{ $value->alamat }}</td>
											<td>{{ $value->no_telp }}</td>
											<td>{{ $value->status }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						
						<div class="text-center">
							<ul class="pagination">
								{!! $customer->render() !!}
							</ul>
						</div>
					</div>
				</form>
						
				<div class="row margin-top-10">
					<div class="col-md-12">
						<button class="btn btn-primary" onclick="window.location.assign('{{ url('visitor-itenary/input') }}')">
							<i class="fa fa-plus"></i> Tambah
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
