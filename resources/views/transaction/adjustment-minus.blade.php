@extends('layouts.main-layout2')
@section('content')
	<div class="col-md-12">
		<h2 class="margin-bottom-30">Transaction</h2>
		
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
					<div class="row">
						<div class="col-md-12">
							<table class="table table-hover"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
				
				<div class="tab-pane fade in" id="unconfirmed">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-hover"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
				
				<div class="tab-pane fade in" id="confirmed">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-hover"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
a