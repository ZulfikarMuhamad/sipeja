<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section role="main" class="content-body">
	<header class="page-header"	>
		<!-- Head title of page -->
		<h2 style="float: right;"> Parameter </h2>
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
							<th style="text-align: center;">Nama Laboratorium</th>
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
<form id="add-row-form" action="<?php echo site_url('parameter/parameter/insert_parameter_ctrlr');?>" method="post">
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
						>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="input_nama" class="form-control" placeholder="Contoh : Logam" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Laboratorium</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<select name="input_lab" class="form-control" required>
									<?php foreach ($lab->result() as $row) :?>
										<option value="<?php echo $row->id; ?>">
											<?php echo $row->nama; ?>
										</option>
									<?php endforeach; ?>
								</select>
							</div>
						</div
						<!-- Form tambahan modal *add* -->
						<div class="form-group">
							<label class="col-sm-2 control-label">Status</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="radio" name="input_status" value="0">&nbsp;<span class="label label-danger">Tidak Aktif</span></input>
								<span>&nbsp;</span>
								<input type="radio" name="input_status" value="1">&nbsp;<span class="label label-success">Aktif</span></input>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alasan</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<textarea rows="3" name="input_alasan" class="form-control" required="true"></textarea>
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
<form id="add-row-form" action="<?php echo base_url();?>index.php/parameter/parameter/delete_parameter_ctrlr" method="post">
    <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
			<section class="panel">
				<div class="panel-body text-center">
					<div class="modal-wrapper">
						<div class="modal-icon center">
							<i class="fa fa-question-circle"></i>
						</div>
						<div class="modal-text">
							<input type="hidden" name="delete_id" class="form-control" required>
							<input type="hidden" name="delete_nama" class="form-control" required>
							<h4>Are you sure?</h4>
							<p>Are you sure that you want to delete this data?</p>
							<textarea rows="3" name="delete_alasan" class="form-control" placeholder="Berikan alasan anda" required="true"></textarea>
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
<form id="add-row-form" action="<?php echo site_url('parameter/parameter/update_parameter_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-edit"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Edit Data Metode Uji</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="form-group">
							<input type="hidden" name="edit_id" class="form-control" placeholder="Contoh : 1" readonly/>
							<label class="col-sm-2 control-label">Nama</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="edit_nama" class="form-control" placeholder="Contoh : Logam" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Lab Id</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<select name="edit_lab" class="form-control" required>
									<?php foreach ($lab->result() as $row) :?>
										<option value="<?php echo $row->id; ?>">
											<?php echo $row->nama; ?>
										</option>
									<?php endforeach; ?>
								</select>
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
							<label class="col-sm-2 control-label">Alasan</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<textarea rows="3" name="edit_alasan" class="form-control" required="true"></textarea>
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
<!-- Details Modal -->
<form id="add-row-form" action="<?php echo site_url('parameter/parameter/update_parameter_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-eye"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Detail Metode Uji</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="col-md-12">
							<label class="col-sm-4 control-label">Nama Laboratorium</label>
							<div class="col-sm-8">
								<label id="detail_lab"></label>
							</div>
							<br>
							<label class="col-sm-4 control-label">Nama Parameter</label>
							<div class="col-sm-8">
								<label id="detail_nama"></label>
							</div>
							<br>
							<label class="col-sm-4 control-label">Status</label>
							<div class="col-sm-8">
								<label id="detail_status"></label>
							</div>
							<br>
							<label class="col-sm-4 control-label">Alasan</label>
							<div class="col-sm-8">
								<label id="detail_alasan"></label>
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
            
            ajax: {"url": "<?php echo base_url();?>index.php/parameter/parameter/get_all_parameter_json_ctrlr", "type": "POST"},
            
            columns: [
                
                {"data": "namaparameter"},
                {"data": "namalab"},
                {"data": "status"},
                {"data": "view"}
            ],

            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {           
	            if(aData["status"] == '1'){
	                $("td:eq(2)", nRow).html('<a class="label label-success">Aktif</a>');
	            }else{
	                $("td:eq(2)", nRow).html('<a class="label label-danger">Tidak Aktif</a>');
	            }
	            return nRow;
	        },

            columnDefs: [{
				targets: 3,
				orderable: false,
				className: 'text-center'
			},
			{
	        	targets: [2,1],
	        	className: 'text-center'
	        }],
            
            order: [[1, 'asc']],

          	rowCallback: function(row, data, iDisplayIndex) {
              	var info = this.fnPagingInfo();
              	var page = info.iPage;
              	var length = info.iLength;
              	$('td:eq(0)', row).html();
          	}
      	});

      	 $('#table_sampel').on('click','.edit_record',function(){
            var idaja=$(this).data('idaja');
            var labIdaja=$(this).data('labaja');
            var namaaja=$(this).data('namaaja');
            var statusaja=$(this).data('statusaja');
            var alasanaja=$(this).data('alasanaja');
            
            $('#modal_edit').modal('show');
            

            $('[name="edit_id"]').val(idaja);
            $('[name="edit_lab"]').val(labIdaja);
            $('[name="edit_nama"]').val(namaaja);
            $('input:radio[name=edit_status]:nth('+statusaja+')').attr('checked',true);
            $('[name="edit_alasan"]').val(alasanaja);
      	});

      	 $('#table_sampel').on('click','.detail_record',function(){
            var namaaja=$(this).data('namaaja');
            var namalabaja=$(this).data('namalabaja');
            var statusaja=$(this).data('statusaja');
            var alasanaja=$(this).data('alasanaja');
            
            $('#modal_detail').modal('show');
            

            $('#detail_lab').html(namalabaja);
            $('#detail_nama').html(namaaja);
            if (statusaja=='1') {
            	$("#detail_status").html('<span class="label label-success">Aktif</span>');
            }else{
            	$("#detail_status").html('<span class="label label-danger">Tidak Aktif</span>');
            }
            $('#detail_alasan').html(alasanaja);
      	});

      	$('#table_sampel').on('click','.delete_record',function(){
            var idaja=$(this).data('idaja');
            var namaaja=$(this).data('namaaja');

            $('#modal_delete').modal('show');

            $('[name="delete_id"]').val(idaja);
            $('[name="delete_nama"]').val(namaaja);
      	});

	});
</script>

	</body>
</html>

