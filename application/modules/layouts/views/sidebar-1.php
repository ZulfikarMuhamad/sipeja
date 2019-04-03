
<?php switch ($this->session->userdata('role')):
	case '1': ?>

	<div class="inner-wrapper">
	<!-- start: sidebar -->
	<aside id="sidebar-left" class="sidebar-left">
	
		<div class="sidebar-header">
			<div class="sidebar-title">
				Navigation
			</div>
			<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>
	
		<div class="nano">
			<div class="nano-content">
				<nav id="menu" class="nav-main" role="navigation">
					<ul class="nav nav-main">
						<li>
							<a href="#">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Dashboard</span>
							</a>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-money" aria-hidden="true"></i>
								<span>Order</span>
							</a>
							<ul class="nav nav-children">
								<li>
									<a href="<?php echo base_url('index.php/order'); ?>">
										 Order
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/harga'); ?>">
										 Daftar Harga
									</a>
								</li>
								<li>
									<a href="#">
										 Penawaran Order
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-cube" aria-hidden="true"></i>
								<span>Sampel</span>
							</a>
							<ul class="nav nav-children">
								<li>
									<a href="<?php echo base_url('index.php/metode_uji'); ?>">
										 Metode Uji
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/parameter'); ?>">
										 Parameter
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/sampel'); ?>">
										 Sampel
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-building-o" aria-hidden="true"></i>
								<span>Laboratorium</span>
							</a>
							<ul class="nav nav-children">
								<li>
									<a href="<?php echo base_url('index.php/bidang'); ?>">
										 Bidang
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/seksie'); ?>">
										 Seksie
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/lingkup_lab'); ?>">
										 Lingkup-Lab
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/lab'); ?>">
										 Laboratorium
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-book" aria-hidden="true"></i>
								<span>Buku Kas Umum</span>
							</a>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-bar-chart-o" aria-hidden="true"></i>
								<span>Laporan</span>
							</a>
							<ul class="nav nav-children">
								<li>
									<a href="#">
										 Laporan Administrasi
									</a>
								</li>
								<li>
									<a href="#">
										 Laporan Keuangan
									</a>
								</li>
								<li>
									<a href="#">
										 Laporan Produksi
									</a>
								</li>
								<li>
									<a href="#">
										 Log Book
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-archive" aria-hidden="true"></i>
								<span>Dokumen</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/log'); ?>">
								<i class="fa fa-file-text-o" aria-hidden="true"></i>
								<span>Log</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-cogs" aria-hidden="true"></i>
								<span>Pengaturan</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-tasks" aria-hidden="true"></i>
								<span>Antrian</span>
							</a>
						</li>
				</nav>
			</div>
		</div>
	</aside>

<?php break; ?>
<?php case '2': ?>
	<div class="inner-wrapper">
	<!-- start: sidebar -->
	<aside id="sidebar-left" class="sidebar-left">
	
		<div class="sidebar-header">
			<div class="sidebar-title">
				Navigation
			</div>
			<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>
	
		<div class="nano">
			<div class="nano-content">
				<nav id="menu" class="nav-main" role="navigation">
					<ul class="nav nav-main">
						<li>
							<a href="#">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Dashboard</span>
							</a>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-money" aria-hidden="true"></i>
								<span>Order</span>
							</a>
							<ul class="nav nav-children">
								<li>
									<a href="<?php echo base_url('index.php/order'); ?>">
										 Order
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/harga'); ?>">
										 Daftar Harga
									</a>
								</li>
								<li>
									<a href="#">
										 Penawaran Order
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-cube" aria-hidden="true"></i>
								<span>Sampel</span>
							</a>
							<ul class="nav nav-children">
								<li>
									<a href="<?php echo base_url('index.php/metode_uji'); ?>">
										 Metode Uji
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/parameter'); ?>">
										 Parameter
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/sampel'); ?>">
										 Sampel
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-building-o" aria-hidden="true"></i>
								<span>Laboratorium</span>
							</a>
							<ul class="nav nav-children">
								<li>
									<a href="<?php echo base_url('index.php/bidang'); ?>">
										 Bidang
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/seksie'); ?>">
										 Seksie
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/lingkup_lab'); ?>">
										 Lingkup-Lab
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/lab'); ?>">
										 Laboratorium
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-tasks" aria-hidden="true"></i>
								<span>Antrian</span>
							</a>
						</li>
				</nav>
			</div>
		</div>
	</aside>
<?php break; ?>
 <?php endswitch;?>