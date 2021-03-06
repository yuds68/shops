@extends('layouts.main-layout')
@section('content')
	<div class="col-md-12">
		<h2>Input Master Barang</h2>
		
		<form class="signup-page margin-bottom-30" action="{{ url('goods/save') }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="row">
				<div class="col-sm-2">
					<label>Kode Barang</label>
				</div>
				<div class="col-sm-4">
					<input class="form-control margin-bottom-20" type="text">
				</div>
				<div class="col-sm-2">
					<label>Jenis Barang</label>
				</div>
				<div class="col-sm-4">
					<input class="form-control margin-bottom-20" type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<label>Panjang</label>
				</div>
				<div class="col-sm-4">
					<input class="form-control margin-bottom-20" type="text">
				</div>
				<div class="col-sm-2">
					<label>Warna</label>
				</div>
				<div class="col-sm-4">
					<input class="form-control margin-bottom-20" type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<label>Status</label>
				</div>
				<div class="col-sm-4">
					<select id="category" name="category" class="form-control margin-bottom-20" required>
						<option value="{{ \Config::get('constants.ACTIVE') }}">{{ \Config::get('constants.ACTIVE') }}</option>
						<option value="{{ \Config::get('constants.INACTIVE') }}">{{ \Config::get('constants.INACTIVE') }}</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-check"></i> Simpan
					</button>
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-minus-circle"></i> Cancel
					</button>
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-times"></i> Hapus
					</button>
				</div>
			</div>
		</form>
	</div>
@stop
