<div id="hornav" class="bottom-border-shadow">
	<div class="container no-padding border-bottom">
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="visible-lg">
					<ul id="hornavmenu" class="nav navbar-nav">
						<li>
							<span class="fa-copy ">Master</span>
							<ul>
								<li>
									<a href="{{ url('user') }}">User</a>
								</li>
								<li>
									<a href="{{ url('goods') }}">Barang</a>
								</li>
								<li>
									<a href="{{ url('customer') }}">Customer</a>
								</li>
								<li>
									<a href="{{ url('supplier') }}">Supplier</a>
								</li>
							</ul>
						</li>
						<li>
							<span class="fa-copy ">Transaksi</span>
							<ul>
								<li>
									<a href="{{ url('sale') }}">Penjualan</a>
								</li>
								<li>
									<a href="{{ url('purchase') }}">Pembelian</a>
								</li>
								<li>
									<a href="{{ url('goods-delivery') }}">Pengiriman Barang</a>
								</li>
								<li>
									<a href="{{ url('goods-receivable') }}">Penerimaan Barang</a>
								</li>
								<li>
									<a href="{{ url('debt-payment') }}">Pembayaran Hutang</a>
								</li>
								<li>
									<a href="{{ url('receivable-payment') }}">Pembayaran Piutang</a>
								</li>
								<li>
									<a href="{{ url('stock-opname') }}">Stock Opname</a>
								</li>
								<li>
									<a href="{{ url('adjustment-minus') }}">Adjustment Minus</a>
								</li>
								<li>
									<a href="{{ url('adjustment-plus') }}">Adjustment Plus</a>
								</li>
							</ul>
						</li>
						<li>
							<span class="fa-copy ">Laporan</span>
							<ul>
								<li>
									<a href="{{ url('sale-report') }}">Penjualan</a>
								</li>
								<li>
									<a href="{{ url('purchase-report') }}">Pembelian</a>
								</li>
								<li>
									<a href="{{ url('debt-report') }}">Hutang</a>
								</li>
								<li>
									<a href="{{ url('receivable-report') }}">Piutang</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>