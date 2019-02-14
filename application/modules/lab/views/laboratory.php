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
						<button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
					</div>
				</div>
			</div>
			<table class="table table-bordered table-striped mb-none" id="table_laboratory">
				<thead>
					<tr>
						<th>Seksie Id</th>
						<th>Nama</th>
						<th>Kode(s)</th>
						<th>Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</section>
	<!-- end: page -->
</section>

<div id="dialog" class="modal-block mfp-hide">
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Are you sure?</h2>
		</header>
		<div class="panel-body">
			<div class="modal-wrapper">
				<div class="modal-text">
					<p>Are you sure that you want to delete this row?</p>
				</div>
			</div>
		</div>
		<footer class="panel-footer">
			<div class="row">
				<div class="col-md-12 text-right">
					<button id="dialogConfirm" class="btn btn-primary">Confirm</button>
					<button id="dialogCancel" class="btn btn-default">Cancel</button>
				</div>
			</div>
		</footer>
	</section>
</div>

<form id="add-row-form" action="<?php echo site_url('lab/welcome/delete_laboratory_ctrlr');?>" method="post">
    <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="product_code" class="form-control" required>
                    <strong>Are you sure to delete this record?</strong>
               	</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-success">Yes</button>
                </div>
            </div>
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
		<script src="<?php echo base_url('assets/vendor/select2/select2.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js'); ?>"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url('assets/javascripts/theme.js'); ?>"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url('assets/javascripts/theme.custom.js'); ?>"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url('assets/javascripts/theme.init.js'); ?>"></script>


		<!-- Examples -->
		<script src="<?php echo base_url('assets/javascripts/tables/examples.datatables.editable.js'); ?>"></script>

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
          	initComplete: function() {
              	var api = this.api();
              	$('#table_laboratory_filter input')
                  	.off('.DT')
                  	.on('input.DT', function() {
                    	api.search(this.value).draw();

              	});
          	},
            
            "oLanguage": {
            	"sProcessing": "loading..."
          	},

            "processing": true,
            
            "serverSide": true,
            
            "ajax": {"url": "<?php echo base_url();?>index.php/lab/welcome/get_all_laboratory_json_ctrlr", "type": "POST"},
            
            "columns": [
                {"data": "seksieId"},
                {"data": "nama"},
                {"data": "kode"},
                {"data": "view"}
            ],

            "columnDefs": [{
				"targets": 3,
				"orderable": false
			}],
            
            "order": [[0, 'asc']],

          	rowCallback: function(row, data, iDisplayIndex) {
              	var info = this.fnPagingInfo();
              	var page = info.iPage;
              	var length = info.iLength;
              	$('td:eq(0)', row).html();
          	}
      	});

      	$('#table_laboratory').on('click','.delete_record',function(){
            var seksieId=$(this).data('seksieId');
            $('#modal_delete').modal('show');
            $('[name="seksieId"]').val(seksieId);
      	});

	});
</script>

	</body>
</html>

