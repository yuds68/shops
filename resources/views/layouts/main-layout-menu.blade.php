<nav class="navbar-default navbar-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="main-menu">
			<li>
				<a href="#">
					<i class="fa fa-sitemap "></i>
					Master 
					<span class="fa arrow"></span>
				</a>
				<ul class="nav nav-second-level collapse in">
					<li>
						<a class="{{ Request::segment(1) == 'goods' ? 'active-menu' : '' }}" href="{{ url('goods') }}">
							<i class="fa fa-bicycle "></i>
							Barang
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'customer' ? 'active-menu' : '' }}" href="{{ url('customer') }}">
							<i class="fa fa-bicycle "></i>
							Customer
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'supplier' ? 'active-menu' : '' }}" href="{{ url('supplier') }}">
							<i class="fa fa-bicycle "></i>
							Supplier
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-sitemap "></i>
					Parameter 
					<span class="fa arrow"></span>
				</a>
				<ul class="nav nav-second-level">
					<li>
						<a class="{{ Request::segment(1) == 'customer-group' ? 'active-menu' : '' }}" href="{{ url('customer-group') }}">
							<i class="fa fa-bicycle "></i>
							Customer Group
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'sell-price' ? 'active-menu' : '' }}" href="{{ url('sell-price') }}">
							<i class="fa fa-bicycle "></i>
							Harga Jual
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-sitemap "></i>
					Transaction 
					<span class="fa arrow"></span>
				</a>
				<ul class="nav nav-second-level">
					<li>
						<a class="{{ Request::segment(1) == 'sell' ? 'active-menu' : '' }}" href="{{ url('sell') }}">
							<i class="fa fa-bicycle "></i>
							Penjualan
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'purchase' ? 'active-menu' : '' }}" href="{{ url('purchase') }}">
							<i class="fa fa-bicycle "></i>
							Pembelian
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'debt-payment' ? 'active-menu' : '' }}" href="{{ url('debt-payment') }}">
							<i class="fa fa-bicycle "></i>
							Pembayaran Hutang
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'receivable-payment' ? 'active-menu' : '' }}" href="{{ url('receivable-payment') }}">
							<i class="fa fa-bicycle "></i>
							Pembayaran Piutang
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'goods-receivable' ? 'active-menu' : '' }}" href="{{ url('goods-receivable') }}">
							<i class="fa fa-bicycle "></i>
							Penerimaan Barang
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'stock-opname' ? 'active-menu' : '' }}" href="{{ url('stock-opname') }}">
							<i class="fa fa-bicycle "></i>
							Stock Opname
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'adjustment-minus' ? 'active-menu' : '' }}" href="{{ url('adjustment-minus') }}">
							<i class="fa fa-bicycle "></i>
							Adjustment Minus
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'adjustment-plus' ? 'active-menu' : '' }}" href="{{ url('adjustment-plus') }}">
							<i class="fa fa-bicycle "></i>
							Adjustment Plus
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-sitemap "></i>
					Report 
					<span class="fa arrow"></span>
				</a>
				<ul class="nav nav-second-level">
					<li>
						<a class="{{ Request::segment(1) == 'sell-report' ? 'active-menu' : '' }}" href="{{ url('sell-report') }}">
							<i class="fa fa-bicycle "></i>
							Penjualan
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'purchase-report' ? 'active-menu' : '' }}" href="{{ url('purchase-report') }}">
							<i class="fa fa-bicycle "></i>
							Pembelian
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'debt-report' ? 'active-menu' : '' }}" href="{{ url('debt-report') }}">
							<i class="fa fa-bicycle "></i>
							Hutang
						</a>
					</li>
					<li>
						<a class="{{ Request::segment(1) == 'receivable-report' ? 'active-menu' : '' }}" href="{{ url('receivable-report') }}">
							<i class="fa fa-bicycle "></i>
							Piutang
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>