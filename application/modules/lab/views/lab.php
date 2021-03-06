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
						<button class="btn btn-primary" data-toggle="modal" data-target="#modal_add" id="button_add">Add <i class="fa fa-plus"></i></button>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered table-striped" width="100%" id="table_lab">
					<thead>
						<tr>
							<th style="text-align: center;">Kode Lab</th>
							<th style="text-align: center;">Nama Lab</th>
							<th style="text-align: center;">Seksie</th>
							<th style="text-align: center;">Bidang</th>
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
<form id="add-row-form" action="<?php echo site_url('lab/lab/insert_lab_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-plus-square-o"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Tambah Laboratorium</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama Laboratorium</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="input_nama" class="form-control" placeholder="Contoh : Kalibrasi" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Kode Laboratorium</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="input_kode" class="form-control" placeholder="Contoh : 01" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Bidang</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<select name="input_bidang" id="input_bidang" class="form-control" required>
                                <?php foreach ($bidang->result() as $row) :?>
                                    <option value="<?php echo $row->id;?>">
                                    	<?php echo $row->nama;?>
                                    </option>
                                <?php endforeach;?>
                                </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Seksie</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<select name="input_seksie" id="input_seksie" class="form-control" required>
                                    <option value="">
                                    	Pilih Bidang Terlebih Dahulu
                                    </option>
                                </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Kabid</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="input_kabid" class="form-control" placeholder="Contoh : 01" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Kasi</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="input_kasi" class="form-control" placeholder="Contoh : 01" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Koord. Laboratorium</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="input_koord" class="form-control" placeholder="Contoh : 01" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Admin Laboratorium</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="input_admin" class="form-control" placeholder="Contoh : 01" required/>
							</div>
						</div>
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
							<label class="col-sm-2 control-label">Alasan Penambahan</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<textarea rows="3" name="input_alasan" class="form-control"></textarea>
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
<form id="add-row-form" action="<?php echo base_url();?>index.php/lab/lab/delete_lab_ctrlr" method="post">
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
<form id="add-row-form" action="<?php echo site_url('lab/lab/update_lab_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        	<section class="panel">
				<div class="panel-body">
					<div class="modal-icon center">
						<i class="fa fa-edit"></i>
					</div>
					<div class="modal-text text-center">
						<h4>Edit Laboratorium</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="form-group">
							<label class="col-sm-2 control-label">Id</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="edit_id" class="form-control" placeholder="Contoh : 1" readonly/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama Laboratorium</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="edit_nama" class="form-control" placeholder="Contoh : Kalibrasi" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Kode Laboratorium</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="edit_kode" class="form-control" placeholder="Contoh : 01" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Bidang</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<select name="edit_bidang" id="edit_bidang" class="form-control" required>
                                <?php foreach ($bidang->result() as $row) :?>
                                    <option value="<?php echo $row->id;?>">
                                    	<?php echo $row->nama;?>
                                    </option>
                                <?php endforeach;?>
                                </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Seksie</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<select name="edit_seksie" id="edit_seksie" class="form-control" required>
                                    <option value="">
                                    	Pilih Bidang
                                    </option>
                                </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Kabid</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="edit_kabid" class="form-control" placeholder="Contoh : 1" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Kasi</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="edit_kasi" class="form-control" placeholder="Contoh : 1" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Koord. Laboratorium</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="edit_koord" class="form-control" placeholder="Contoh : 1" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Admin Laboratorium</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<input type="text" name="edit_admin" class="form-control" placeholder="Contoh : 1" required></textarea>
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
						<h4>Detail Laboratorium</h4>
					</div>
					<hr>
					<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
						<div class="">
							<label class="col-sm-4 control-label">Id</label>
							<div class="col-sm-8">
								<label id="detail_id" readonly></label>
							</div>
							</br>
							<label class="col-sm-4 control-label">Nama Laboratorium</label>
							<div class="col-sm-8">
								<label id="detail_nama"></label>
							</div>
							<br>
							<label class="col-sm-4 control-label">Kode Laboratorium</label>
							<div class="col-sm-8">
								<label id="detail_kode"></label>
							</div>
							<br>
							<label class="col-sm-4 control-label">Bidang</label>
							<div class="col-sm-8">
								<label id="detail_bidang"></label>
							</div>
							<br>
							<label class="col-sm-4 control-label">Seksie</label>
							<div class="col-sm-8">
								<label id="detail_seksie"></label>
							</div>
							<br>
							<label class="col-sm-4 control-label">Kabid</label>
							<div class="col-sm-8">
								<label id="detail_kabid"></label>
							</div>
							<br>
							<label class="col-sm-4 control-label">Kasi</label>
							<div class="col-sm-8">
								<label id="detail_kasi"></label>
							</div>
							<br>
							<label class="col-sm-4 control-label">Koord. Laboratorium</label>
							<div class="col-sm-8">
								<label id="detail_koord"></label>
							</div>
							<br>
							<label class="col-sm-4 control-label">Admin Laboratorium</label>
							<div class="col-sm-8">
								<label id="detail_admin"></label>
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
 
      	var table = $("#table_lab").dataTable({
          	initialize: function() {
              	var api = this.api();
              	$('#table_lab_filter input')
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
            
            ajax: {"url": "<?php echo base_url();?>index.php/lab/lab/get_all_lab_json_ctrlr", "type": "POST"},
            
            columns: [
                {"data": "kode"},
                {"data": "lanama"},
				{"data": "snama"},
                {"data": "bnama"},
                {"data": "status"},
                {"data": "view"}
            ],
            // Replace row status when value=1 -> "aktif".
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {           
	            if(aData["status"] == '1'){
	                $("td:eq(4)", nRow).html('<a class="label label-success">Aktif</a>');
	            }else{
	                $("td:eq(4)", nRow).html('<a class="label label-danger">Tidak Aktif</a>');
	            }
	            return nRow;
	        },

            columnDefs: [{
				targets: 5,
				orderable: false,
				className: 'text-center'
			},
			{
				targets: [0, 1, 2, 3, 4],
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

      	function abc(){
      		$('#input_bidang').change(function(){
				var input_bidang = $('#input_bidang').val();
			  	if(input_bidang != ''){
				   	$.ajax({
				    	url:"<?php echo base_url();?>index.php/lab/lab/get_seksie_ctrlr",
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

      	
      	$("#button_add").click(function(){
	        $('#input_bidang').change(function(){

	        	

	        	
				var abc = '1';
			  	if(abc != ''){
				   	$.ajax({
				    	url:"<?php echo base_url();?>index.php/lab/lab/get_seksie_ctrlr",
				    	method:"POST",
				    	data:{abc:abc},
				    	success:function(data){
				     		$('[name="input_seksie"]').html(data);
				     		//$('#input_seksie').html('<option value="">abcd</option>');
				    	}
				   	});
			  	}
			  	else{
					$('#input_seksie').html('<option value="">Pilih Bidang</option>');
				}
				
			});  
    	})
    	

      	$('#table_lab').on('click','.detail_record',function(){
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
      	});

      	$('#table_lab').on('click','.edit_record',function(){
        	var laidaja=$(this).data('laidaja');
            var lanamaaja=$(this).data('lanamaaja');
            var kodeaja=$(this).data('kodeaja');
            var bidaja=$(this).data('bidaja');
            var sidaja=$(this).data('sidaja');
            var snamaaja=$(this).data('snamaaja');
            var kabididaja=$(this).data('kabididaja');
            var kasieidaja=$(this).data('kasieidaja');
            var koordidaja=$(this).data('koordidaja');
            var adminidaja=$(this).data('adminidaja');
            var statusaja =$ (this).data('statusaja');
            var alasanaja=$(this).data('alasanaja');

            var edit_bidang = bidaja;
			$.ajax({
				url:"<?php echo base_url();?>index.php/lab/lab/get_seksie_ctrlr",
				method:"POST",
				data:{edit_bidang:edit_bidang},
				success:function(data){
				    $('[name="edit_seksie"]').html(data);
				    $('[name="edit_seksie"]').val(sidaja);
				}
			});
      
            $('#modal_edit').modal('show');
            
            $('#edit_bidang').change(function(){
				var edit_bidang = $('#edit_bidang').val();
			  	if(edit_bidang != ''){
				   	$.ajax({
				    	url:"<?php echo base_url();?>index.php/lab/lab/get_seksie_ctrlr",
				    	method:"POST",
				    	data:{edit_bidang:edit_bidang},
				    	success:function(data){
				     		$('[name="edit_seksie"]').html(data);
				    	}
				   	});
			  	}
			  	else{
					$('#edit_seksie').html('<option value="">Select State</option>');
				}
			});

            $('[name="edit_id"]').val(laidaja);
            $('[name="edit_nama"]').val(lanamaaja);
            $('[name="edit_kode"]').val(kodeaja);
            $('[name="edit_bidang"]').val(bidaja);
            $('[name="edit_kabid"]').val(kabididaja);
            $('[name="edit_kasi"]').val(kasieidaja);
            $('[name="edit_koord"]').val(koordidaja);
            $('[name="edit_admin"]').val(adminidaja);

            //$('select[name="edit_seksie"]:nth(<option value="'+ sidaja +'">'+ snamaaja +'</option>').attr('selected',true);

            //Make ieu gung bisa
            $('input:radio[name=edit_status]:nth('+statusaja+')').attr('checked',true);
            $('[name="edit_alasan"]').val(alasanaja);
            
      	});

      	$('#table_lab').on('click','.delete_record',function(){
            var laidaja=$(this).data('laidaja');
            $('#modal_delete').modal('show');
            $('[name="id"]').val(laidaja);
      	});

	});
</script>

	</body>
</html>

