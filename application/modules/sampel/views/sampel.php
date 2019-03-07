<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section role="main" class="content-body">
	<header class="page-header" style="float: right;">
		<!-- Head title of page -->
		<h2 style="float: right;"> Sampel </h2>
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
				<table class="table table-bordered table-striped" width="100%" id="table_sampel">
					<thead>
						<tr>
							<th style="text-align: center;">Nama</th>
							<th style="text-align: center;">SPM</th>
							<th style="text-align: center;">KAN</th>
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
<form id="add-row-form" action="<?php echo site_url('sampel/sampel/insert_sampel_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<header class="panel-heading">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="panel-title">Form Tambah Sampel</h2>
				</header>
				<div class="panel-body">
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama</label>
							<div class="col-sm-9">
								<input type="text" name="input_nama" class="form-control" placeholder="Contoh : Logam" required/>
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
							<label class="col-sm-3 control-label">SpmJumlah</label>
							<div class="col-sm-9">
								<input type="text" name="input_spmjumlah" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">SpmHari</label>
							<div class="col-sm-9">
								<input type="text" name="input_spmhari" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Kan</label>
							<div class="col-sm-9">
								<input type="text" name="input_kan" class="form-control" placeholder="Contoh : 1" />
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
<form id="add-row-form" action="<?php echo base_url();?>index.php/sampel/sampel/delete_sampel_ctrlr" method="post">
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
<form id="add-row-form" action="<?php echo site_url('sampel/sampel/update_sampel_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-pencil"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Edit Data Sampel</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="form-group">
							<label class="col-sm-3 control-label">Id</label>
							<div class="col-sm-9">
								<input type="text" name="edit_id" class="form-control" placeholder="Contoh : Logam" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">SPM</label>
							<div class="col-sm-9">
								<input type="text" name="edit_nama" class="form-control" placeholder="Contoh : Logam" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">SPM</label>
							<div class="col-sm-4">
								jumlah sampel : <input type="number" name="edit_spmjumlah" class="form-control" placeholder="Contoh : 1" />
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-4">
								Batas Hari : <input type="number" name="edit_spmjumlah" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Sertifikasi KAN</label>
							<div class="col-sm-9">
								<input type="radio" name="edit_kan" value="0">&nbsp;<span class="label label-default">Tidak</span></input>
								<span>&nbsp;</span>
								<input type="radio" name="edit_kan" value="1">&nbsp;<span class="label label-info">Ya</span></input>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status</label>
							<div class="col-sm-9">
								<input type="radio" name="edit_status" value="0">&nbsp;<span class="label label-danger">Tidak Aktif</span></input>
								<span>&nbsp;</span>
								<input type="radio" name="edit_status" value="1">&nbsp;<span class="label label-success">Aktif</span></input>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Alasan</label>
							<div class="col-sm-9">
								<textarea rows="3" name="edit_alasan" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12 text-right">
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

<!-- Detail Sampel -->
<form id="add-row-form" action="<?php echo site_url('sampel/sampel/update_sampel_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-eye"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Detail Sampel</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="form-group">
							<label class="col-sm-3 control-label">Id</label>
							<div class="col-sm-9">
								<input type="text" name="detail_id" class="form-control" placeholder="Contoh : Logam" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">SPM</label>
							<div class="col-sm-9">
								<input type="text" name="detail_nama" class="form-control" placeholder="Contoh : Logam" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">SPM</label>
							<div class="col-sm-4">
								jumlah sampel : <input type="number" name="detail_spmjumlah" class="form-control" placeholder="Contoh : 1" />
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-4">
								Batas Hari : <input type="number" name="detail_spmjumlah" class="form-control" placeholder="Contoh : 1" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Sertifikasi KAN</label>
							<div class="col-sm-9">
								<input type="radio" name="detail_kan" value="0">&nbsp;<span class="label label-default">Tidak</span></input>
								<span>&nbsp;</span>
								<input type="radio" name="detail_kan" value="1">&nbsp;<span class="label label-info">Ya</span></input>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status</label>
							<div class="col-sm-9">
								<input type="radio" name="detail_status" value="0">&nbsp;<span class="label label-danger">Tidak Aktif</span></input>
								<span>&nbsp;</span>
								<input type="radio" name="detail_status" value="1">&nbsp;<span class="label label-success">Aktif</span></input>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Alasan</label>
							<div class="col-sm-9">
								<textarea rows="3" name="detail_alasan" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12 text-right">
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</form>
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
 
      	var table = $("#table_sampel").dataTable({
          	initialize: function() {
              	var api = this.api();
              	$('#table_sampel_filter input')
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
            
            ajax: {"url": "<?php echo base_url();?>index.php/sampel/sampel/get_all_sampel_json_ctrlr", "type": "POST"},
            
            columns: [
                {"data": "nama"},
                {"data": "spmjumlah"},
                {"data": "kan"},
                {"data": "status"},
                {"data": "view"}
            ],

            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {           
	            /*change value of cells status*/
	            if(aData["status"] == '1'){
	                $("td:eq(3)", nRow).html('<a class="label label-success">Aktif</a>');
	            }else{
	                $("td:eq(3)", nRow).html('<a class="label label-danger">Tidak Aktif</a>');
	            }
	            /*change value of cells SPM*/
	            	$("td:eq(1)", nRow).html(aData["spmhari"]+' hari/ '+aData["spmjumlah"]+' sampel');

	            /*change value of cells KAN*/
	            if(aData["kan"] == '1'){
	                $("td:eq(2)", nRow).html('<a class="label label-info">Ya</a>');
	            }else{
	                $("td:eq(2)", nRow).html('<a class="label label-default">Tidak</a>');
	            }
	            return nRow;
	        },

            columnDefs: [{
				targets: 4,
				orderable: false
			},
			{
	        	targets: [1,2,3,4],
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

      	 $('#table_sampel').on('click','.edit_record',function(){
            var idaja=$(this).data('idaja');
            var namaaja=$(this).data('namaaja');
            var statusaja=$(this).data('statusaja');
            var spmjumlahaja=$(this).data('spmjumlahaja');
            var spmhariaja=$(this).data('spmhariaja');
            var kanaja=$(this).data('kanaja');
            var alasanaja=$(this).data('alasanaja');
            
            $('#modal_edit').modal('show');
            

            $('[name="edit_id"]').val(idaja);
            $('[name="edit_nama"]').val(namaaja);
            $('input:radio[name=edit_status]:nth('+statusaja+')').attr('checked',true);
            $('[name="edit_spmjumlah"]').val(spmjumlahaja);
            $('[name="edit_spmhari"]').val(spmhariaja);
            $('input:radio[name=edit_kan]:nth('+kanaja+')').attr('checked',true);
            $('[name="edit_alasan"]').val(alasanaja);
      	});

      	 $('#table_sampel').on('click','.detail_record',function(){
            var idaja=$(this).data('idaja');
            var namaaja=$(this).data('namaaja');
            var statusaja=$(this).data('statusaja');
            var spmjumlahaja=$(this).data('spmjumlahaja');
            var spmhariaja=$(this).data('spmhariaja');
            var kanaja=$(this).data('kanaja');
            var alasanaja=$(this).data('alasanaja');
            
            $('#modal_detail').modal('show');
            

            $('[name="detail_id"]').val(idaja);
            $('[name="detail_nama"]').val(namaaja);
            $('input:radio[name=detail_status]:nth('+statusaja+')').attr('checked',true);
            $('[name="detail_spmjumlah"]').val(spmjumlahaja);
            $('[name="detail_spmhari"]').val(spmhariaja);
            $('input:radio[name=detail_kan]:nth('+kanaja+')').attr('checked',true);
            $('[name="detail_alasan"]').val(alasanaja);
      	});

      	$('#table_sampel').on('click','.delete_record',function(){
            var idaja=$(this).data('idaja');
            $('#modal_delete').modal('show');
            $('[name="id"]').val(idaja);
      	});

	});
</script>

	</body>
</html>

