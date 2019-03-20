<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section role="main" class="content-body">
	<header class="page-header" style="float: right;">
		<!-- Head title of page -->
		<h2 style="float: right;"> log </h2>
	</header>

	<!-- start: page -->
	<section class="panel">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered table-striped" width="100%" id="table_sampel">
					<thead>
						<tr>
							<th style="text-align: center;">Nama</th>
							<th style="text-align: center;">Aktivitas</th>
							<th style="text-align: center;">Alasan</th>
							<th style="text-align: center;">Waktu</th>
						</tr>	
					</thead>
				</table>
			</div>
			
		</div>
	</section>
	<!-- end: page -->
</section>

<!-- Modal Add Product-->
<form id="add-row-form" action="<?php echo site_url('log/log/insert_log_ctrlr');?>" method="post">
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
							<label class="col-sm-2 control-label">Alasan</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<textarea rows="3" name="input_alasan" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">aktivitas</label>
							<label class="col-sm-1 control-label">:</label>
							<div class="col-sm-9">
								<textarea rows="3" name="input_aktivitas" class="form-control"></textarea>
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
            
            ajax: {"url": "<?php echo base_url();?>index.php/log/log/get_all_log_json_ctrlr", "type": "POST"},
            
            columns: [
                {"data": "userId"},
                {"data": "aktivitas"},
                {"data": "alasan"},
                {"data": "created_at"}
            ],

            /*replace empty alasan column into 'tidak ada alasan'*/
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {           
	            if(aData["alasan"] == ''){
	                $("td:eq(2)", nRow).html('<i>tidak ada alasan</i>');
	            }
	            return nRow;
	        },

            columnDefs: [{
				targets: 3,
				orderable: false,
			},
			{
				targets: 0,
				className: 'text-center'
			}],
            
            order: [[3, 'desc']],

          	rowCallback: function(row, data, iDisplayIndex) {
              	var info = this.fnPagingInfo();
              	var page = info.iPage;
              	var length = info.iLength;
              	$('td:eq(0)', row).html();
          	}
      	});
	});
</script>

	</body>
</html>

