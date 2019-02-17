<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section role="main" class="content-body">
	<header class="page-header" style="float: right;">
		<!-- Head title of page -->
		<h2 style="float: right;"> Laboratorium </h2>
	</header>

	<!-- start: page -->
	<section class="panel">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<div class="mb-md pull-right">
						<button class="btn btn-primary" data-toggle="modal" data-target="#modal_add">Add <i class="fa fa-plus"></i></button>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered table-striped" width="100%" id="table_laboratory">
					<thead>
						<tr>
							<th>Seksie Id</th>
							<th>Nama</th>
							<th>Kode(s)</th>
							<th>Status</th>
							<th>Akreditasi</th>
							<th>Personel</th>
							<th>Akomodasi</th>
							<th>Beban</th>
							<th>Peralatan</th>
							<th>Metode</th>
							<th>Biaya</th>
							<th>KabidId</th>
							<th>KasieId</th>
							<th>KoordId</th>
							<th>AdminId</th>
							<th>Alasan</th>
							<th>Actions</th>
						</tr>	
					</thead>
				</table>
			</div>
			
		</div>
	</section>
	<!-- end: page -->
</section>

<!-- Modal Add Product-->
<form id="add-row-form" action="<?php echo site_url('lab/welcome/insert_laboratory_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<header class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="panel-title">Form Tambah Laboratorium</h2>
				</header>
				<div class="panel-body">
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="form-group mt-lg">
							<label class="col-sm-3 control-label" style="">Seksi ID</label>
							<div class="col-sm-9">
								<input type="number" name="input_seksieId" class="form-control" placeholder="Contoh : 1" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama</label>
							<div class="col-sm-9">
								<input type="text" name="input_name" class="form-control" placeholder="Contoh : Logam" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Kode</label>
							<div class="col-sm-9">
								<input type="text" name="input_code" class="form-control" placeholder="Contoh : A23" />
							</div>
						</div>
						<!-- Form tambahan modal *add* -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Status</label>
							<div class="col-sm-9">
								<input type="text" name="input_status" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Akreditasi</label>
							<div class="col-sm-9">
								<input type="text" name="input_akreditasi" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Personel</label>
							<div class="col-sm-9">
								<input type="text" name="input_personel" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Akomodasi</label>
							<div class="col-sm-9">
								<input type="text" name="input_akomodasi" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Beban</label>
							<div class="col-sm-9">
								<input type="text" name="input_beban" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Peralatan</label>
							<div class="col-sm-9">
								<input type="text" name="input_peralatan" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Metode</label>
							<div class="col-sm-9">
								<input type="text" name="input_metode" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Biaya</label>
							<div class="col-sm-9">
								<input type="text" name="input_biaya" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Alasan</label>
							<div class="col-sm-9">
								<textarea rows="3" name="input_alasan" class="form-control"></textarea>
							</div>
						</div>
					</form>
				</div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-12 text-right">
							<button type="submit" class="btn btn-primary modal-confirm">Tambah</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						</div>
					</div>
				</footer>
			</section>
        </div>
    </div>
</form>

<!-- Modal Delete Product-->
<form id="add-row-form" action="<?php echo base_url();?>index.php/lab/welcome/delete_labo
	ratory_ctrlr" method="post">
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
							<h4>Are you sure?</h4>
							<p>Are you sure that you want to delete this data?</p>
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
<form id="add-row-form" action="<?php echo site_url('lab/welcome/update_laboratory_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<header class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="panel-title">Form Edit Laboratorium</h2>
				</header>
				<div class="panel-body">
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="form-group mt-lg">
							<label class="col-sm-3 control-label" style="">Seksi ID</label>
							<div class="col-sm-9">
								<input type="number" name="seksieId" class="form-control" placeholder="Contoh : 1" readonly/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama</label>
							<div class="col-sm-9">
								<input type="text" name="nama" class="form-control" placeholder="Contoh : Logam" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Kode</label>
							<div class="col-sm-9">
								<input type="text" name="kode" class="form-control" placeholder="Contoh : A23" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status</label>
							<div class="col-sm-9">
								<input type="text" name="status" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Akreditasi</label>
							<div class="col-sm-9">
								<input type="text" name="akreditasi" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Personel</label>
							<div class="col-sm-9">
								<input type="text" name="personel" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Akomodasi</label>
							<div class="col-sm-9">
								<input type="text" name="akomodasi" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Beban</label>
							<div class="col-sm-9">
								<input type="text" name="beban" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Peralatan</label>
							<div class="col-sm-9">
								<input type="text" name="peralatan" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Metode</label>
							<div class="col-sm-9">
								<input type="text" name="metode" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Biaya</label>
							<div class="col-sm-9">
								<input type="text" name="biaya" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">KabidId</label>
							<div class="col-sm-9">
								<input type="text" name="kabidId" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">KasieId</label>
							<div class="col-sm-9">
								<input type="text" name="kasieId" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">KoordId</label>
							<div class="col-sm-9">
								<input type="text" name="koordId" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">AdminId</label>
							<div class="col-sm-9">
								<input type="text" name="adminId" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Alasan</label>
							<div class="col-sm-9">
								<textarea rows="3" name="alasan" class="form-control"></textarea>
							</div>
						</div>
					</form>
				</div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-12 text-right">
							<button type="submit" class="btn btn-primary modal-confirm">Edit</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						</div>
					</div>
				</footer>
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
 
      	var table = $("#table_laboratory").dataTable({
          	initialize: function() {
              	var api = this.api();
              	$('#table_laboratory_filter input')
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
            
            ajax: {"url": "<?php echo base_url();?>index.php/lab/welcome/get_all_laboratory_json_ctrlr", "type": "POST"},
            
            columns: [
                {"data": "seksieId"},
                {"data": "nama"},
                {"data": "kode"},
                {"data": "status"},
                {"data": "akreditasi"},
                {"data": "personel"},
                {"data": "akomodasi"},
                {"data": "beban"},
                {"data": "peralatan"},
                {"data": "metode"},
                {"data": "biaya"},
                {"data": "kabidId"},
                {"data": "kasieId"},
                {"data": "koordId"},
                {"data": "adminId"},
                {"data": "alasan"},
                {"data": "view"}
            ],

            columnDefs: [{
				targets: 16,
				orderable: false
			}],
            
            order: [[0, 'asc']],

          	rowCallback: function(row, data, iDisplayIndex) {
              	var info = this.fnPagingInfo();
              	var page = info.iPage;
              	var length = info.iLength;
              	$('td:eq(0)', row).html();
          	}
      	});

      	 $('#table_laboratory').on('click','.edit_record',function(){
            var sekidaja=$(this).data('sekidaja');
            var namaaja=$(this).data('namaaja');
            var kodeaja=$(this).data('kodeaja');
            var statusaja=$(this).data('statusaja');
            var akreditasiaja=$(this).data('akreditasiaja');
            var personelaja=$(this).data('personelaja');
            var akomodasiaja=$(this).data('akomodasiaja');
            var bebanaja=$(this).data('bebanaja');
            var peralatanaja=$(this).data('peralatanaja');
            var metodeaja=$(this).data('metodeaja');
            var biayaaja=$(this).data('biayaaja');
            var kabidIdaja=$(this).data('kabidIdaja');
            var kasieIdaja=$(this).data('kasieIdaja');
            var koordIdaja=$(this).data('koordIdaja');
            var adminIdaja=$(this).data('adminIdaja');
            var alasanaja=$(this).data('alasanaja');
            
            $('#modal_edit').modal('show');
            
            $('[name="seksieId"]').val(sekidaja);
            $('[name="nama"]').val(namaaja);
            $('[name="kode"]').val(kodeaja);
            $('[name="status"]').val(statusaja);
            $('[name="akreditasi"]').val(akreditasiaja);
            $('[name="personel"]').val(personelaja);
            $('[name="akomodasi"]').val(akomodasiaja);
            $('[name="beban"]').val(bebanaja);
            $('[name="peralatan"]').val(peralatanaja);
            $('[name="metode"]').val(metodeaja);
            $('[name="biaya"]').val(biayaaja);
            $('[name="kabidId"]').val(kabidIdaja);
            $('[name="kasieId"]').val(kasieIdaja);
            $('[name="koordId"]').val(koordIdaja);
            $('[name="adminId"]').val(adminIdaja);
            $('[name="alasan"]').val(alasanaja);
      	});

      	$('#table_laboratory').on('click','.delete_record',function(){
            var idaja=$(this).data('idaja');
            $('#modal_delete').modal('show');
            $('[name="id"]').val(idaja);
      	});

	});
</script>

	</body>
</html>

