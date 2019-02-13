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
			<table class="table table-bordered table-striped mb-none" id="datatable-editable">
				<thead>
					<tr>
						<th>Rendering engine</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr class="gradeX">
						<td>Trident</td>
						<td>Internet
							Explorer 4.0
						</td>
						<td>Win 95+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeC">
						<td>Trident</td>
						<td>Internet
							Explorer 5.0
						</td>
						<td>Win 95+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Trident</td>
						<td>Internet
							Explorer 5.5
						</td>
						<td>Win 95+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Trident</td>
						<td>Internet
							Explorer 6
						</td>
						<td>Win 98+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Trident</td>
						<td>Internet Explorer 7</td>
						<td>Win XP SP2+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Trident</td>
						<td>AOL browser (AOL desktop)</td>
						<td>Win XP</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.5</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 2.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 3.0</td>
						<td>Win 2k+ / OSX.3+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.0</td>
						<td>OSX.2+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.5</td>
						<td>OSX.3+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape 7.2</td>
						<td>Win 95+ / Mac OS 8.6-9.2</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Browser 8</td>
						<td>Win 98SE+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Navigator 9</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.1</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.2</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.3</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.4</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.5</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.6</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.7</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.8</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Seamonkey 1.1</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Epiphany 2.20</td>
						<td>Gnome</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.2</td>
						<td>OSX.3</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.3</td>
						<td>OSX.3</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 2.0</td>
						<td>OSX.4+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 3.0</td>
						<td>OSX.4+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>OmniWeb 5.5</td>
						<td>OSX.4+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>iPod Touch / iPhone</td>
						<td>iPod</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>S60</td>
						<td>S60</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.0</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.0</td>
						<td>Win 95+ / OSX.3+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.2</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.5</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera for Wii</td>
						<td>Wii</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nokia N800</td>
						<td>N800</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nintendo DS browser</td>
						<td>Nintendo DS</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeC">
						<td>KHTML</td>
						<td>Konqureror 3.1</td>
						<td>KDE 3.1</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.3</td>
						<td>KDE 3.3</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.5</td>
						<td>KDE 3.5</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeX">
						<td>Tasman</td>
						<td>Internet Explorer 4.5</td>
						<td>Mac OS 8-9</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.1</td>
						<td>Mac OS 7.6-9</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.2</td>
						<td>Mac OS 8-X</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.1</td>
						<td>Embedded devices</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.4</td>
						<td>Embedded devices</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Dillo 0.8</td>
						<td>Embedded devices</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Links</td>
						<td>Text only</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Lynx</td>
						<td>Text only</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeC">
						<td>Misc</td>
						<td>IE Mobile</td>
						<td>Windows Mobile 6</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeC">
						<td>Misc</td>
						<td>PSP browser</td>
						<td>PSP</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<tr class="gradeU">
						<td>Other browsers</td>
						<td>All others</td>
						<td>-</td>
						<td class="actions">
							<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
							<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
							<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
							<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	<!-- end: page -->
</section>
</div>
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