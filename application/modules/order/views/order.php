<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section role="main" class="content-body">
	<header class="page-header">
		<!-- Head title of page -->
		<h2 style="float: right;"> Order </h2>
	</header>

	<!-- start: page -->
	<section class="panel">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<div class="mb-md pull-right">
						<button class="btn btn-primary" data-toggle="modal" data-target="#modal_add" id="button_add">Add <i class="fa fa-plus"></i></button>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered table-striped" width="100%" id="table_order">
					<thead>
						<tr>
							<th style="text-align: center;">Nomor Order</th>
							<th style="text-align: center;">Pelanggan</th>
							<th style="text-align: center;">Tanggal Order</th>
							<th style="text-align: center;">Lab</th>
							<th style="text-align: center;">Nomor Laporan</th>
							<th style="text-align: center;">Status</th>
							<th style="text-align: center;">Actions</th>
						</tr>	
					</thead>
				</table>
			</div>
			
		</div>
	</section>
	<!-- end: page -->
</section>

<!-- Modal Add Product-->
<form id="add-row-form" action="<?php echo site_url('bidang/bidang/insert_bidang_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-plus-square-o"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Order Baru</h4>
					</div>
					<hr>

					<div class="tabs">
						<ul class="nav nav-tabs nav-justified">
							<li class="active">
								<a href="#data_pelanggan" data-toggle="tab" class="text-center">
								Data Pelanggan
								</a>
							</li>
							<li>
								<a href="#sampel_parameter_input" data-toggle="tab" class="text-center">
								Sampel dan Parameter
								</a>
							</li>
							<li>
								<a href="#finalisasi" data-toggle="tab" class="text-center">
								Finalisasi
								</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="data_pelanggan" class="tab-pane active">
								<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
									<div class="form-group">
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Nama</b></label>

											</div>
											<div class="col-sm-8">
												<input type="text" name="input_nama" class="form-control"/>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-8 col-sm-offset-4">
												<button class="btn btn-primary" name="button_input_kontrak">Kontrak</button>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Provinsi</b></label>
											</div>
											<div class="col-sm-8">
												<select name="input_bidang" id="input_provinsi" class="form-control">
				                                    <option value="">
				                                    	Pilih Provinsi
				                                    </option>
				                                </select>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Kota</b></label>
											</div>
											<div class="col-sm-8">
												<select name="input_bidang" id="input_kota" class="form-control" disabled="">
				                                    <option value="">
				                                    	Pilih Provinsi Terlebih Dahulu
				                                    </option>
				                                </select>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Alamat</b></label>
											</div>
											<div class="col-sm-8">
												<textarea rows="2" name="input_alamat" class="form-control"></textarea>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Kode Pos</b></label>
											</div>
											<div class="col-sm-8">
												<input type="number" name="input_kodepos" class="form-control"/>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Telpon / HP</b></label>
											</div>
											<div class="col-sm-8">
												<input type="number" name="input_telepon" class="form-control"/>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Fax</b></label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="input_fax" class="form-control"/>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Website</b></label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="input_website" class="form-control"/>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Email</b></label>
											</div>
											<div class="col-sm-8">
												<input type="email" name="input_email" class="form-control"/>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Jenis Perusahaan</b></label>
											</div>
											<div class="col-sm-8">
												<select name="input_bidang" id="input_perusahaan" class="form-control">
				                                    <option value="">
				                                    	Pilih Jenis Perusahaan
				                                    </option>
				                                </select>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<hr>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-12">
												<h4 style="margin-top: 0px; margin-bottom: 0px;">Contact Person</h4>
												<br>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Nama</b></label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="input_namacp" class="form-control"/>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 5px;">
											<div class="col-sm-4">
												<label><b>Telepon / HP</b></label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="input_teleponcp" class="form-control"/>
											</div>
										</div>

									</div>
									<div class="form-group">
										<div class="col-sm-6 text-left">
											<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
										</div>
										<div class="col-sm-6 text-right">
											<button type="button" class="btn btn-success" data-dismiss="modal">Selanjutnya <i class="fa fa-arrow-circle-right"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>



					
				</div>
			</section>
        </div>
    </div>
</form>

<!-- Modal Delete Product-->
<form id="add-row-form" action="<?php echo base_url();?>index.php/bidang/bidang/delete_bidang_ctrlr" method="post">
    <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
			<section class="panel">
				<div class="panel-body text-center">
					<div class="modal-wrapper">
						<div class="modal-icon center">
							<i class="fa fa-question-circle"></i>
						</div>
						<div class="modal-text">
							<input type="hidden" name="id" class="form-control" required>
							<h4>Hapus Data!</h4>
							<p>Anda yakin ingin menghapus data ini?</p>
						</div>
					</div>
				</div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-12 text-right">
							<button type="submit" class="btn btn-primary modal-confirm">Hapus</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						</div>
					</div>
				</footer>
			</section>
		</div>
        </div>
    </div>
</form>

<!-- Modal Update Product-->
<form id="add-row-form" action="<?php echo site_url('bidang/bidang/update_bidang_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-edit"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Edit Bidang</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="form-group">
							<label class="col-sm-2 control-label">Id</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="edit_id" class="form-control" placeholder="Contoh : 1-9" readonly/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama Bidang</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="edit_nama" class="form-control" placeholder="Contoh : Logam" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Kode Bidang</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<textarea rows="3" name="edit_kode" class="form-control" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Status</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="radio" name="edit_status" value="0">&nbsp;<span class="label label-danger">Tidak Aktif</span></input>
								<span>&nbsp;</span>
								<input type="radio" name="edit_status" value="1">&nbsp;<span class="label label-success">Aktif</span></input>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alasan Perubahan</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<textarea rows="3" name="edit_alasan" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12  text-right">
								<button type="submit" class="btn btn-primary modal-confirm">Edit</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>	
							</div>
						</div>
					</form>
				</div>
			</section>
        </div>
    </div>
</form>


<!-- Modal Details -->
<form id="add-row-form" method="post">
    <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-eye"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Detail Order</h4>
					</div>
					<hr>
					<div class="tabs">
						<ul class="nav nav-tabs nav-justified">
							<li class="active">
								<a href="#informasi_order" data-toggle="tab" class="text-center">
									<i class="fa fa-book">	
									</i>
								Informasi Order</a>
							</li>
							<li>
								<a href="#detail_pembayaran" data-toggle="tab" class="text-center">
									<i class="fa fa-money">
									</i>
								Detail Pembayaran</a>
							</li>
							<li>
								<a href="#sampel_parameter" data-toggle="tab" class="text-center">
									<i class="fa fa-list">
									</i>
								Sampel & Parameter</a>
							</li>
							<li>
								<a href="#dokumen_order" data-toggle="tab" class="text-center">
									<i class="fa fa-file">
									</i>
								Dokumen Order</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="informasi_order" class="tab-pane active">
								<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
									<div class="form-group">
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-4">
												<label><b>Nomer Order</b></label>
											</div>
											<div class="col-sm-8">
												<label id="detail_nomer">205201900002</label>
											</div>
										</div>
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-4">
												<label><b>Lab</b></label>
											</div>
											<div class="col-sm-8">
												<label id="detail_lab">Listrik</label>
											</div>
										</div>
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-4">
												<label><b>Pelanggan</b></label>
											</div>
											<div class="col-sm-8">
												<label id="detail_pelanggan">PT. BINA USAHA CIPTA PRIMA (BUCP)</label>
											</div>
										</div>
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-4">
												<label><b>Contact Person</b></label>
											</div>
											<div class="col-sm-8">
												<label id="detail_cp">Fsa</label>
											</div>
										</div>
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-4">
												<label><b>Tanggal Order</b></label>
											</div>
											<div class="col-sm-8">
												<label id="detail_tanggal">11 Februari 2019</label>
											</div>
										</div>
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-4">
												<label><b>Nama Pada Sertifikat</b></label>
											</div>
											<div class="col-sm-8">
												<label id="detail_nama">CV. Masa Depan Nikah</label>
											</div>
										</div>
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-4">
												<label><b>Alamat Pada Sertifikat</b></label>
											</div>
											<div class="col-sm-8">
												<label id="detail_alamat">Jl. Cibaligo Km. 0.5 Cimindi, Cimahi</label>
											</div>
										</div>
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-4">
												<label><b>Sertifikat Dalam Bahasa Inggris</b></label>
											</div>
											<div class="col-sm-8">
												<label id="detail_sertifikat" class="label label-default">Tidak</label>
											</div>
										</div>
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-4">
												<label><b>Sisa Sampel Diambil</b></label>
											</div>
											<div class="col-sm-8">
												<label id="detail_sisa" class="label label-info">Ya</label>
											</div>
										</div>
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-4">
												<label><b>Keterangan</b></label>
											</div>
											<div class="col-sm-8">
												<label id="detail_keterangan">asdasd</label>
											</div>
										</div>
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-12">
												<label><b>Status Transaksi</b></label>
											</div>
											<div class="col-sm-2">
												<label id="" style="border: thick;"><b>Registrasi</b></label>
											</div>
											<div class="col-sm-2">
												<label id="" style="border: thick;"><b>Pelunasan</b></label>
											</div>
											<div class="col-sm-2">
												<label id="" style="border: thick;"><b>Persiapan Dokumen Order</b></label>
											</div>
											<div class="col-sm-2">
												<label id="" style="border: thick;"><b>Verifikasi</b></label>
											</div>
											<div class="col-sm-2">
												<label id="" style="border: thick;"><b>Pengujian</b></label>
											</div>
											<div class="col-sm-2">
												<label id="" style="border: thick;"><b>Penyusunan Laporan</b></label>
											</div>
										</div>
										<div class="col-sm-12 control-label">
											<div class="progress progress-striped light active" style="margin-bottom: 0px">
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
															60%
												</div>
											</div>
											<br>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-4">
												<label><b>Nomor Kwitansi :</b></label>
											</div>
											<div class="col-sm-8">
												<input type="text" id="kwitansi" name="kwitansi" class="form-control" required="" autocomplete="off">
												<br>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-3">
												<button type="submit" class="btn btn-success modal-confirm btn-block">Setujui Pembayaran</button>
											</div>
											<div class="col-sm-3">
												<button type="submit" class="btn btn-warning modal-confirm btn-block">Perbaikan Order</button>
											</div>
											<div class="col-sm-3">
												<button type="submit" class="btn btn-warning modal-confirm btn-block">Pembatalan Sebagian</button>
											</div>
											<div class="col-sm-3">
												<button type="submit" class="btn btn-danger modal-confirm btn-block">Pembatalan Order</button>
											</div>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<hr>
										</div>

										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-12">
												<h4 style="margin-top: 0px; margin-bottom: 0px;">Log Transaksi</h4>
												<br>
											</div>
										</div>
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-bordered table-striped" width="100%" id="table_log">
														<thead>
															<tr>
																<th style="text-align: center;">Waktu</th>
																<th style="text-align: center;">Aktivitas</th>
																<th style="text-align: center;">User</th>
															</tr>	
														</thead>
														<tbody>
															<tr>
																<td style="text-align: left;">2019-02-11 14:29:44</td>
																<td style="text-align: left;">Administrasi lab</td>
																<td style="text-align: center;">Seksi Informasi</td>
															</tr>
															<tr>
																<td style="text-align: left;">2019-02-11 14:29:07</td>
																<td style="text-align: left;">Cetak form kaji ulang</td>
																<td style="text-align: center;">Seksi Informasi</td>
															</tr>
															<tr>
																<td style="text-align: left;">2019-02-11 14:30:49</td>
																<td style="text-align: left;">Order selesai</td>
																<td style="text-align: center;">Seksi Informasi</td>
															</tr>
															<tr>
																<td style="text-align: left;">2019-02-11 14:28:58</td>
																<td style="text-align: left;">Pembayaran sebesar Rp 19.376.000,00</td>
																<td style="text-align: center;">Seksi Informasi</td>
															</tr>
															<tr>
																<td style="text-align: left;">2019-02-11 14:29:57</td>
																<td style="text-align: left;">Pengujian /kalibrasi selesai</td>
																<td style="text-align: center;">Seksi Informasi</td>
															</tr>
															<tr>
																<td style="text-align: left;">2019-02-11 14:30:16</td>
																<td style="text-align: center;">Penyusunan laporan tahap 1 selesai</td>
																<td style="text-align: center;">Seksi Informasi</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12 text-right">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</form>
							</div>
							<div id="detail_pembayaran" class="tab-pane">
								<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
									<div class="form-group">
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-bordered table-striped" width="100%" id="table_log">
														<thead>
															<tr>
																<th style="text-align: center;">Waktu</th>
																<th style="text-align: center;">No. Kwitansi</th>
																<th style="text-align: center;">Nominal</th>
																<th style="text-align: center;">Status</th>
																<th style="text-align: center;">Action</th>
															</tr>	
														</thead>
														<tbody>
															<tr>
																<td style="text-align: left;">2019-02-11 14:28:58</td>
																<td style="text-align: center;">12313123</td>
																<td style="text-align: left;">Rp 19.376.000,00</td>
																<td style="text-align: center;">
																	<label class="label label-success">Lunas</label>
																</td>
																<td style="text-align: center;">
																	<a href="javascript:void(0);" title="Print" class="print_record label label-default">
																      	<i class="fa fa-print" style="color: #777777">
																      	</i>
																    </a>
																</td>
															</tr>
															<tr>
																<td colspan="4">
																	<span class="pull-right">
																		<strong>Total Tagihan</strong>
																	</span>
																</td>
																<td>Rp 19.376.000,00</td>
															</tr>
															<tr>
																<td colspan="4">
																	<span class="pull-right">
																		<strong>Terbayar</strong>
																	</span>
																</td>
																<td>Rp 19.376.000,00</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12 text-right">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</form>
							</div>
							<div id="sampel_parameter" class="tab-pane">
								<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
									<div class="form-group">
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-bordered table-striped" width="100%" id="table_log">
														<thead>
															<tr>
																<th style="text-align: center;">Sampel</th>
																<th style="text-align: center;">Jumlah Sampel</th>
																<th style="text-align: center;">Jumlah Sertifikat</th>
																<th style="text-align: center;">Keterangan</th>
																<th style="text-align: center;">Biaya Lain</th>
																<th style="text-align: center;">Perkiraan Selesai</th>
																<th style="text-align: center;">Teknisi</th>
															</tr>	
														</thead>
														<tbody>
															<tr data-toggle="collapse" data-target="#1" class="accordion-toggle" style="cursor:pointer">
																<td style="text-align: left;">
																	<i class="fa fa-plus-square" style="cursor: pointer;">
																	</i>
																	Aki Sepeda Motor (Merk ABC)
																</td>
																<td style="text-align: center;">3</td>
																<td style="text-align: center;">3</td>
																<td style="text-align: center;"></td>
																<td style="text-align: left;">Rp 0,00</td>
																<td style="text-align: left;">23 Februari 2019</td>
																<td style="text-align: left;">Revantino Muhammad Solih Indra Lesmana</td>
															</tr>

															<tr>
							                                   <td colspan="7" class="hiddenRow">
							                                        <div class="accordion-body collapse" id="1"> 
							                                            <table class="table table-bordered table-striped" width="100%" id="table_detail" style="margin-bottom: 0px">
							                                            	<tbody>
							                                            		<tr>
							                                            			<td style="text-align: center;">Parameter</td>
																					<td style="text-align: center;">Harga Satuan</td>
																					<td style="text-align: center;">Jumlah</td>
																					<td style="text-align: center;">Metode Uji</td>
							                                            		</tr>
							                                            		<tr>
							                                            			<td style="text-align: left;">Dimensi dan Unjuk Kerja</td>
																					<td style="text-align: left;">Rp 1.280.000,00</td>
																					<td style="text-align: center;">3</td>
																					<td style="text-align: center;">SNI</td>
							                                            		</tr>
							                                            		<tr>
							                                            			<td style="text-align: left;">Umur dan Vibrasi</td>
																					<td style="text-align: left;">Rp 4.512.000,00</td>
																					<td style="text-align: center;">3</td>
																					<td style="text-align: center;">SNI</td>
							                                            		</tr>
							                                            	</tbody>
							                                            </table>
							                                        </div> 
							                                    </td>
							                                </tr>

							                                <tr data-toggle="collapse" data-target="#2" class="accordion-toggle" style="cursor:pointer">
																<td style="text-align: left;">
																	<i class="fa fa-plus-square" style="cursor: pointer;">
																	</i>
																	Lampu Senter Lalu Lintas (merk Philip)
																</td>
																<td style="text-align: center;">5</td>
																<td style="text-align: center;">5</td>
																<td style="text-align: center;"></td>
																<td style="text-align: left;">Rp 0,00</td>
																<td style="text-align: left;">28 Februari 2019</td>
																<td style="text-align: left;">Revantino Cahya Priadi</td>
															</tr>

															<tr>
							                                   <td colspan="7" class="hiddenRow">
							                                        <div class="accordion-body collapse" id="2"> 
							                                            <table class="table table-bordered table-striped" width="100%" id="table_detail" style="margin-bottom: 0px">
							                                            	<tbody>
							                                            		<tr>
							                                            			<td style="text-align: center;">Parameter</td>
																					<td style="text-align: center;">Harga Satuan</td>
																					<td style="text-align: center;">Jumlah</td>
																					<td style="text-align: center;">Metode Uji</td>
							                                            		</tr>
							                                            		<tr>
							                                            			<td style="text-align: left;">Uji Performance : Fotometri & Kelistrikan</td>
																					<td style="text-align: left;">Rp 400.000,00</td>
																					<td style="text-align: center;">5</td>
																					<td style="text-align: center;">SNI</td>
							                                            		</tr>
							                                            	</tbody>
							                                            </table>
							                                        </div> 
							                                    </td>
							                                </tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12 text-right">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</form>
							</div>
							<div id="dokumen_order" class="tab-pane">
								<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
									<div class="form-group">
										<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-bordered table-striped" width="100%" id="table_log">
														<thead>
															<tr>
																<th style="text-align: center;">Jenis</th>
																<th style="text-align: center;">Nomer</th>
																<th style="text-align: center;">Tanggal Terbit</th>
																<th style="text-align: center;">Dokumen Penyerta</th>
																<th style="text-align: center;">Action</th>
															</tr>	
														</thead>
														<tbody>
															<tr>
																<td style="text-align: left;">Bukti Order</td>
																<td style="text-align: center;"></td>
																<td style="text-align: left;">2019-02-11 14:27:24</td>
																<td style="text-align: center;">-</td>
																<td style="text-align: center;">
																	<a href="javascript:void(0);" title="Print" class="print_record label label-default">
																      	<i class="fa fa-print" style="color: #777777">
																      	</i>
																    </a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12 text-right">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
        </div>
    </div>
</form>
<!-- Vendor -->
		<script src="<?php echo base_url('assets/vendor/jquery/jquery.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/nanoscroller/nanoscroller.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery-placeholder/jquery.placeholder.js'); ?>"></script>
		
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url('assets/vendor/select2/select2.js'); ?>"></script>>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url('assets/javascripts/theme.js'); ?>"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url('assets/javascripts/theme.custom.js'); ?>"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url('assets/javascripts/theme.init.js'); ?>"></script>


		<!-- Examples -->
		<script src="<?php echo base_url('assets/datatables/datatables.min.js'); ?>"></script>


		<script src="<?php echo base_url('assets/smartwizard/js/jquery.smartWizard.min.js'); ?>"></script>

<script>
	$(document).ready(function(){

    	// Setup datatables
       	$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      	{
         	return {
              	"iStart": oSettings._iDisplayStart,
              	"iEnd": oSettings.fnDisplayEnd(),
              	"iLength": oSettings._iDisplayLength,
              	"iTotal": oSettings.fnRecordsTotal(),
              	"iFilteredTotal": oSettings.fnRecordsDisplay(),
              	"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
              	"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
          	};
      	};
 
      	var table = $("#table_order").dataTable({
          	initialize: function() {
              	var api = this.api();
              	$('#table_order_filter input')
                  	.off('.DT')
                  	.on('input.DT', function() {
                    	api.search(this.value).draw();

              	});
          	},
            
            oLanguage: {
            	sProcessing: "loading..."
          	},

            processing: true,
            serverSide: true,
            
            ajax: {"url": "<?php echo base_url();?>index.php/order/order/get_all_order_json_ctrlr", "type": "POST"},
            
            columns: [
                {"data": "kode"},
                {"data": "lanama"},
				{"data": "snama"},
                {"data": "bnama"},
                {"data": "bnama"},
                {"data": "status"},
                {"data": "view"}
            ],
            // Replace row status when value=1 -> "aktif".
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {           
	            if(aData["status"] == '1'){
	                $("td:eq(5)", nRow).html('<a class="label label-success">Order Selesai</a>');
	            }else{
	                $("td:eq(5)", nRow).html('<a class="label label-primary">Tidak Aktif</a>');
	            }
	            return nRow;
	        },

            columnDefs: [{
				targets: 6,
				orderable: false,
				className: 'text-center'
			},
			{
				targets: [2,3,5],
				className: 'text-center'
			}],
            
            order: [[0, 'asc']],

          	rowCallback: function(row, data, iDisplayIndex) {
              	var info = this.fnPagingInfo();
              	var page = info.iPage;
              	var length = info.iLength;
              	$('td:eq(0)', row).html();
          	}
      	});


      	$('#table_order').on('click','.detail_record',function(){
            var laidaja=$(this).data('laidaja');
            var lanamaaja=$(this).data('lanamaaja');
            var kodeaja=$(this).data('kodeaja');
            var bnamaaja=$(this).data('bnamaaja');
            var snamaaja=$(this).data('snamaaja');
            var kabididaja=$(this).data('kabididaja');
            var kasieidaja=$(this).data('kasieidaja');
            var koordidaja=$(this).data('koordidaja');
            var adminidaja=$(this).data('adminidaja');
            var statusaja =$ (this).data('statusaja');
            var alasanaja=$(this).data('alasanaja');
            
            $('#modal_detail').modal('show');

            /*$('[name="detail_id"]').val(idaja);*/
            $('#detail_id').html(laidaja);
            $('#detail_nama').html(lanamaaja);
            $('#detail_kode').html(kodeaja);
            $('#detail_bidang').html(bnamaaja);
            $('#detail_seksie').html(snamaaja);
            $('#detail_kabid').html(kabididaja);
            $('#detail_kasi').html(kasieidaja);
            $('#detail_koord').html(koordidaja);
            $('#detail_admin').html(adminidaja);
            $('#detail_alasan').html(alasanaja);
            //$('[name="detail_nama"]').val(namaaja);
            //Make ieu gung bisa
            if (statusaja=='1') {
            	$("#detail_status").html('<span class="label label-success">Aktif</span>');
            }else{
            	$("#detail_status").html('<span class="label label-danger">Tidak Aktif</span>');
            }
            /*$('input:radio[name=detail_status]:nth('+statusaja+')').attr('checked',true);*/
            //$('[name="detail_keterangan"]').val(keteranganaja);
            //$('[name="detail_alasan"]').val(alasanaja);


            $('tr').on('shown.bs.collapse', function(){
				$(this).prev('tr').find(".fa-plus-square").removeClass("fa-plus-square").addClass("fa-minus-square");
			}).on('hidden.bs.collapse', function(){
			    $(this).prev('tr').find(".fa-minus-square").removeClass("fa-minus-square").addClass("fa-plus-square");
			});
      	});

      	 $('#table_bidang').on('click','.edit_record',function(){
            var idaja=$(this).data('idaja');
            var namaaja=$(this).data('namaaja');
            var kodeaja=$(this).data('kodeaja');
            var statusaja =$ (this).data('statusaja');
            var alasanaja=$(this).data('alasanaja');
            
            $('#modal_edit').modal('show');
            
            $('[name="edit_id"]').val(idaja);
            $('[name="edit_nama"]').val(namaaja);
            $('[name="edit_kode"]').val(kodeaja);
            //Make ieu gung bisa
            $('input:radio[name=edit_status]:nth('+statusaja+')').attr('checked',true);
            $('[name="edit_alasan"]').val(alasanaja);
      	});

      	$('#table_bidang').on('click','.delete_record',function(){
            var idaja=$(this).data('idaja');
            $('#modal_delete').modal('show');
            $('[name="id"]').val(idaja);
      	});

	});
</script>

	</body>
</html>

