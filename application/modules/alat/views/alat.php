<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section role="main" class="content-body">
	<header class="page-header">
		<!-- Head title of page -->
		<h2 style="float: right;"> Alat </h2>
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
							<th style="text-align: center;">Kode</th>
							<th style="text-align: center;">Nama Alat</th>
                            <th style="text-align: center;">Parameter</th>
                            <th style="text-align: center;">Laboratorium</th>
							<th style="text-align: center;">Kondisi</th>
                            <th style="text-align: center;">Action</th>
						</tr>	
					</thead>
				</table>
			</div>
			
		</div>
	</section>
	<!-- end: page -->
</section>

<!-- Modal Add Product-->
<form id="add-row-form" action="<?php echo site_url('alat/alat/insert_alat_ctrlr');?>" method="post">
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
							<label class="col-sm-3 control-label">kode Alat</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<input type="text" name="input_kode" class="form-control" require="true">
							</div>
                        </div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Nama Alat</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<input type="text" name="input_nama" class="form-control" require="true">
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Laboratorium</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<select name="input_lab" class="form-control" required>
									<option value="" selected disabled hidden>Pilih Laboratorium</option>
									<?php foreach($lab->result() as $row) :?>
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
								<select name="input_parameter" class="form-control" required>
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
							<label class="col-sm-3 control-label">Kondisi</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<input type="radio" name="input_kondisi" value="0">&nbsp;<span class="label label-success">Aktif</span></input>
								<span>&nbsp;</span>
                                <input type="radio" name="input_kondisi" value="1">&nbsp;<span class="label label-warning">Dalam perbaikan</span></input>
                                <span>&nbsp;</span>
								<input type="radio" name="input_kondisi" value="2">&nbsp;<span class="label label-danger">Tidak Aktif</span></input>
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
<form id="add-row-form" action="<?php echo base_url();?>index.php/alat/alat/delete_alat_ctrlr" method="post">
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
<form id="add-row-form" action="<?php echo site_url('alat/alat/update_alat_ctrlr');?>" method="post">
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
						<input type="hidden" name="edit_id" class="form-control" placeholder="Contoh : 1" readonly/>
							<label class="col-sm-3 control-label">kode Alat</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<input type="text" name="edit_kode" class="form-control" require="true">
							</div>
                        </div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Nama Alat</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<input type="text" name="edit_nama" class="form-control" require="true">
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Laboratorium</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<select name="edit_lab" class="form-control" required>
									<?php foreach($lab->result() as $row) :?>
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
								<select name="edit_parameter" id="edit_parameter" class="form-control" required>
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
							<label class="col-sm-3 control-label">Kondisi</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-8">
								<input type="radio" name="edit_kondisi" value="0">&nbsp;<span class="label label-success">Aktif</span></input>
								<span>&nbsp;</span>
                                <input type="radio" name="edit_kondisi" value="1">&nbsp;<span class="label label-warning">Dalam perbaikan</span></input>
                                <span>&nbsp;</span>
								<input type="radio" name="edit_kondisi" value="2">&nbsp;<span class="label label-danger">Tidak Aktif</span></input>
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

<!--Modal Details -->
<form id="add-row-form" method="post">
    <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-eye"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Details Alat</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="">
							<label class="col-sm-3 control-label">Kode Alat</label>
							<div class="col-sm-9">
								<label id="detail_kode"></label>
							</div>
							<br>
							<label class="col-sm-3 control-label">Nama Alat</label>
							<div class="col-sm-9">
								<label id="detail_namaalat"></label>
							</div>
							<br>
							<label class="col-sm-3 control-label">Laboratorium</label>
							<div class="col-sm-9">
								<label id="detail_lab"></label>
							</div>
							<br>
							<label class="col-sm-3 control-label">Parameter</label>
							<div class="col-sm-9">
								<label id="detail_parameter"></label>
							</div>
							<br>
							<label class="col-sm-3 control-label">Kondisi</label>
							<div class="col-sm-9">
								<label id="detail_kondisi"></label>
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
</form> -->
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
            
            ajax: {"url": "<?php echo base_url();?>index.php/alat/alat/get_all_alat_json_ctrlr", "type": "POST"},
            
            columns: [
                {"data": "kode"},
                {"data": "namaalat"},
                {"data": "namaparameter"},
                {"data": "namalab"},
                {"data": "kondisi"},
                {"data": "view"}
            ],
            // Replace row status when value=1 -> "aktif".
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {           
	            if(aData["kondisi"] == '0'){
	                $("td:eq(4)", nRow).html('<a class="label label-success">Aktif</a>');
	            }else if(aData["kondisi"] == '1'){
	                $("td:eq(4)", nRow).html('<a class="label label-warning">Dalam Perbaikan</a>');
	            }else{
                    $("td:eq(4)", nRow).html('<a class="label label-danger">Tidak Aktif</a>');
                }
	            return nRow;
	        },

            columnDefs: [{
				targets: 4,
				orderable: false,
				className: 'text-center'
			}],

          	rowCallback: function(row, data, iDisplayIndex) {
              	var info = this.fnPagingInfo();
              	var page = info.iPage;
              	var length = info.iLength;
              	$('td:eq(0)', row).html();
          	}
      	});

		//=========================custom add===========================
		/* function abc(){
      		$('#input_bidang').change(function(){
				var input_bidang = $('#input_bidang').val();
			  	if(input_bidang != ''){
				   	$.ajax({
				    	url:"?php echo base_url();?>index.php/lab/lab/get_seksie_ctrlr",
				    	method:"POST",
				    	data:{input_bidang:input_bidang},
				    	success:function(data){
				     		$('[name="input_seksie"]').html(data);
				    	}
				   	});
			  	}
			  	else{
					$('#input_seksie').html('<option value="">Pilih Bidang</option>');
				}
			});
      	}
 */
		//==============================================================

      	$('#table_sampel').on('click','.detail_record',function(){
			var kodeaja=$(this).data('kodeaja');
            var namaalataja=$(this).data('namaalataja');
            var namaparameteraja=$(this).data('namaparameteraja');
			var namalabaja=$(this).data('namalabaja');
            var kondisiaja =$ (this).data('kondisiaja');
            
            $('#modal_detail').modal('show');
            
			$('#detail_kode').html(kodeaja);
			$('#detail_namaalat').html(namaalataja);
            $('#detail_lab').html(namalabaja);
            $('#detail_parameter').html(namaparameteraja);
            if (kondisiaja=='0') {
            	$("#detail_kondisi").html('<span class="label label-success">Aktif</span>');
            }else if (kondisiaja=='1'){
            	$("#detail_kondisi").html('<span class="label label-warning">Dalam Perbaikan</span>');
            }else{
				$("#detail_kondisi").html('<span class="label label-danger">Tidak Aktif</span>');
			}
      	});
		  
		  //Modal Edit
      	 $('#table_sampel').on('click','.edit_record',function(){
            var idaja=$(this).data('idaja');
			var kodeaja=$(this).data('kodeaja');
            var namaalataja=$(this).data('namaalataja');
            var parameterIdaja=$(this).data('parameteridaja');
			var labIdaja=$(this).data('labidaja');
            var kondisiaja =$ (this).data('kondisiaja');
		
//	================================ ***** =====================================		
			/* var edit_lab = labIdaja;
			$.ajax({
				url:"?php echo base_url();?>index.php/alat/alat/get_parameterById_ctrlr",
				method:"POST",
				data:{edit_lab:edit_lab},
				success:function(data){
				    $('[name="edit_parameter"]').html(data);
				    $('[name="edit_parameter"]').val(parameterIdaja);
				}
			}); */
//	================================ ***** =====================================                  
            $('#modal_edit').modal('show');

			/* $('#edit_lab').change(function(){
				var edit_lab = $('#edit_lab').val();
			  	if(edit_lab != ''){
				   	$.ajax({
				    	url:"?php echo base_url();?>index.php/alat/alat/get_parameterById_ctrlr",
				    	method:"POST",
				    	data:{edit_lab:edit_lab},
				    	success:function(data){
				     		$('[name="edit_parameter"]').html(data);
				    	}
				   	});
			  	}
			  	else{
					$('#edit_parameter').html('<option value="">Pilih Parameter</option>');
				}
      		}); */
            
            $('[name="edit_id"]').val(idaja);
			$('[name="edit_kode"]').val(kodeaja);
            $('[name="edit_nama"]').val(namaalataja);
            $('[name="edit_lab"]').val(labIdaja);
            $('[name="edit_parameter"]').val(parameterIdaja);
            $('input:radio[name=edit_kondisi]:nth('+kondisiaja+')').attr('checked',true);			
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

