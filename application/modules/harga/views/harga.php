<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section role="main" class="content-body">
	<header class="page-header">
		<!-- Head title of page -->
		<h2 style="float: right;"> harga </h2>
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
							<th style="text-align: center;">Sampel</th>
							<th style="text-align: center;">Parameter</th>
							<th style="text-align: center;">Harga</th>
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
<form id="add-row-form" action="<?php echo site_url('harga/harga/insert_harga_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-plus-square-o"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Tambah Data</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Sampel</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<select name="input_sampel_id" class="form-control" required>
									<option value="" selected disabled hidden>Pilih Sampel</option>
									<?php foreach($sampel->result() as $row) :?>
										<option value="<?php echo $row->id; ?>">
											<?php echo $row->nama; ?>
										</option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Parameter</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<select name="input_nama_parameter" class="form-control" required>
									<option value="" disabled selected hidden>Pilih Parameter</option>
									<?php foreach($parameter->result() as $row) :?>
										<option value="<?php echo $row->id; ?>">
											<?php echo $row->nama; ?>
										</option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Harga</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<input type="number" name="input_harga" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<input type="radio" name="input_status" value="0">&nbsp;<span class="label label-danger">Tidak Aktif</span></input>
								<span>&nbsp;</span>
								<input type="radio" name="input_status" value="1">&nbsp;<span class="label label-success">Aktif</span></input>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12  text-right">
								<button type="submit" class="btn btn-primary modal-confirm">Tambah</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>	
							</div>
						</div>
					</form>
				</div>
			</section>
        </div>
    </div>
</form>

<!-- Modal Delete Product-->
<form id="add-row-form" action="<?php echo base_url();?>index.php/harga/harga/delete_harga_ctrlr" method="post">
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
<form id="add-row-form" action="<?php echo site_url('harga/harga/update_harga_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-edit"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Edit Data harga Uji</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Sampel</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<input type="hidden" name="edit_id">
								<label name="edit_namasampel"></label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Parameter</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<label name="edit_parameter"></label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Harga</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<input type="number" name="edit_harga" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<input type="radio" name="edit_status" value="0">&nbsp;<span class="label label-danger">Tidak Aktif</span></input>
								<span>&nbsp;</span>
								<input type="radio" name="edit_status" value="1">&nbsp;<span class="label label-success">Aktif</span></input>
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
						<h4>Details harga Uji</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="">
							
							<label class="col-sm-3 control-label">Nama Sampel</label>
							<div class="col-sm-9">
								<label id="detail_namasampel"></label>
							</div>
							<br>
							<label class="col-sm-3 control-label">Parameter</label>
							<div class="col-sm-9">
								<label id="detail_parameter"></label>
							</div>
							<br>
							<label class="col-sm-3 control-label">Harga</label>
							<div class="col-sm-9">
								<label id="detail_harga"></label>
							</div><br>
							<label class="col-sm-3 control-label">Status</label>
							<div class="col-sm-9">
								<label id="detail_status"></label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12 text-right">
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
            
            ajax: {"url": "<?php echo base_url();?>index.php/harga/harga/get_all_harga_json_ctrlr", "type": "POST"},
            
            columns: [
                {"data": "namasampel"},
                {"data": "namaparameter"},
                {"data": "harga", render: $.fn.dataTable.render.number( ',', '.', 0, 'Rp. ' )},
                {"data": "status"},
                {"data": "view"}
            ],
            // Replace row status when value=1 -> "aktif".
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {           
	            if(aData["status"] == '1'){
	                $("td:eq(3)", nRow).html('<a class="label label-success">Aktif</a>');
	            }else{
	                $("td:eq(3)", nRow).html('<a class="label label-danger">Tidak Aktif</a>');
	            }
	            return nRow;
	        },

            columnDefs: [{
				targets: 4,
				orderable: false,
				className: 'text-center'
			},
			{
				targets: 3,
				className: 'text-center'
			}],

          	rowCallback: function(row, data, iDisplayIndex) {
              	var info = this.fnPagingInfo();
              	var page = info.iPage;
              	var length = info.iLength;
              	$('td:eq(0)', row).html();
          	}
      	});

      	$('#table_sampel').on('click','.detail_record',function(){
            var idaja=$(this).data('idaja');
            var namasampelaja=$(this).data('namasampelaja');
            var namaparameteraja=$(this).data('namaparameteraja');
            var statusaja =$ (this).data('statusaja');
            var hargaaja =$ (this).data('hargaaja');
            var rupiah = (hargaaja/1000).toFixed(3);
            
            $('#modal_detail').modal('show');
            
            $('#detail_id').html(idaja);
            $('#detail_namasampel').html(namasampelaja);
            $('#detail_parameter').html(namaparameteraja);
            $('#detail_harga').html('Rp. '+rupiah);
            if (statusaja=='1') {
            	$("#detail_status").html('<span class="label label-success">Aktif</span>');
            }else{
            	$("#detail_status").html('<span class="label label-danger">Tidak Aktif</span>');
            }
      	});

      	 $('#table_sampel').on('click','.edit_record',function(){
            var idaja=$(this).data('idaja');
            var namasampelaja=$(this).data('namasampelaja');
            var namaparameteraja=$(this).data('namaparameteraja');
            var hargaaja=$(this).data('hargaaja');
            var statusaja =$ (this).data('statusaja');
            
            $('#modal_edit').modal('show');
            
            $('[name="edit_id"]').html(idaja);
            $('[name="edit_id"]').val(idaja);
            $('[name="edit_namasampel"]').html(namasampelaja);
            $('[name="edit_parameter"]').html(namaparameteraja);
            $('[name="edit_harga"]').val(hargaaja);
            $('input:radio[name=edit_status]:nth('+statusaja+')').attr('checked',true);
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

