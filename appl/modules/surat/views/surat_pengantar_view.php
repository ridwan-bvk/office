<style>
<!--
	.select2-container--default .select2-selection--multiple .select2-selection__choice {
		border: none;
		background-color: #3c8dbc;
	}
-->
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Pengantar<small><?php echo $title; ?></small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-envelope"></i> Surat</a></li>
		<li><a href="#">Eksternal</a></li>
		<li class="active"><?php echo $title; ?></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
<?php 
	echo form_open_multipart('', ' id="form_user" class="form-horizontal" onsubmit="return validateData($(this));"');
	echo form_hidden('mode', 'add');
	echo form_hidden('action', 'surat.eksternal_model.update_surat_pengantar');
	echo form_hidden('pengantar_surat_eksternal_id', $ref->pengantar_surat_eksternal_id);
	echo form_hidden('function_ref_id', $function_ref_id); 
?>
	<!-- Default box -->
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><?php echo $title . ' - ' . humanize($ref->tujuan_unit); ?></h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
			</div>
		</div>

		<div class="box-body">
			<table id="list-pengantar" class="table table-bordered table-striped table-hover table-heading table-datatable">
				<thead>
					<tr>
						<th width="50"><input type="checkbox" id="check_all_detail" checked="checked"> &nbsp; No.</th>
						<th width="100">No. Agenda</th>
						<th width="120">Surat</th>
						<th width="200">Asal</th>
						<th>Perihal</th>
						<th width="100">Status Berkas</th>
					</tr>
				</thead>
				<tbody>
<?php 
	$i = 1;
	foreach($list_surat as $row) {
?>
					<tr>
						<td width="50"><input type="checkbox" name="detail_pengantar[]" class="detail-check" value="<?php echo $row->surat_eksternal_id; ?>" checked="checked" > &nbsp; <?php echo $i++ ?>.</td>
						<td width="100"><a href="<?php echo site_url('surat/external/incoming/' . $row->surat_eksternal_id); ?>" target="_blank"> <?php echo strtoupper($row->jenis_agenda) . ' - ' . $row->agenda_id; ?></a></td>
						<td width="120">
							<?php echo $row->surat_no; ?><br>
							<?php echo db_to_human($row->surat_tgl); ?>
						</td>
						<td width="200">
							<?php echo $row->surat_ext_title; ?><br>
							<?php echo $row->surat_ext_instansi; ?>
						</td>
						<td><?php echo $row->surat_perihal; ?></td>
						<td width="50"><?php echo humanize($row->status_berkas); ?></td>
					</tr>
	
<?php 
	}
?>
				</tbody>
			</table>
		</div><!-- /.box-body -->

		<!-- div class="box-footer">
			
		</div><!-- /.box-footer-->
	</div><!-- /.box -->

	<!-- Default box -->
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"> Distribusi </h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
			</div>
		</div>

		<div class="box-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="tujuan_unit" class="col-sm-3 control-label">Unit</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="text" id="tujuan_unit" name="tujuan_unit" class="form-control required" data-input-title="Unit Tujuan" value="<?php echo $ref->tujuan_unit; ?>" readonly="readonly">
								<div id="tujuan_unit_kode" class="input-group-addon"><?php echo $ref->tujuan_kode; ?></div>	
								<input type="hidden" id="tujuan_kode" name="tujuan_kode" class="form-control required" data-input-title="Kode Instansi Unit" value="<?php echo $ref->tujuan_kode; ?>">
								<input type="hidden" id="tujuan_unit_id" name="tujuan_unit_id" value="<?php echo $ref->tujuan_unit_id; ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="tujuan_jabatan" class="col-sm-3 control-label">Jabatan</label>
						<div class="col-sm-9">
<?php 
	$opt_jabatan = $this->admin_model->get_system_config('jabatan');
	echo form_dropdown('tujuan_jabatan', $opt_jabatan, $ref->tujuan_jabatan, (' id="tujuan_jabatan" class="form-control" data-input-title="Nama Jabatan" readonly="readonly" '));
?>
						</div>
					</div>
					<div class="form-group">
						<label for="tujuan_nama" class="col-sm-3 control-label">Nama</label>
						<div class="col-sm-9">
							<input type="text" id="tujuan_nama" name="tujuan_nama" class="form-control" data-input-title="Nama Pejabat Tujuan" value="<?php echo $ref->tujuan_nama; ?>" readonly="readonly" >
						</div>
					</div>
					<div class="form-group">
						<label for="tujuan_dir" class="col-sm-3 control-label">Direktorat</label>
						<div class="col-sm-9">
							<input type="text" id="tujuan_dir" name="tujuan_dir" class="form-control" readonly="readonly" data-input-title="Direktorat Tujuan" value="<?php echo $ref->tujuan_dir; ?>" >
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="surat_tembusan" class="col-sm-3 control-label">Tembusan</label>
						<div class="col-sm-9">
<?php 
	$list = $this->user_model->get_user_role(4);
	$opt_pejabat = array();
	foreach ($list->result() as $row) {
		$opt_pejabat[$row->user_id] = $row->user_name; 
	}
	echo form_multiselect('surat_tembusan[]', $opt_pejabat, $cc, (' id="surat_tembusan" class="form-control select2" disabled="disabled"'));
?>
						</div>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<fieldset>
						<legend class="contro-label">Pengiriman</legend>
						<div class="form-group">
							<label class="col-lg-2 col-sm-3 control-label">Tanggal</label>
							<div class="col-lg-10 col-sm-9">
								<input type="text" id="pengiriman_time" name="pengiriman_time" class="form-control" value="<?php echo $ref->pengiriman_time; ?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label for="catatan" class="col-lg-2 col-sm-3 control-label">Catatan</label>
							<div class="col-lg-10 col-sm-9">
								<textarea id="catatan_pengirim" name="catatan_pengirim" class="form-control" rows="3" placeholder="Catatan Pengiriman" data-input-title="Catatan Pengiriman" readonly="readonly" ><?php echo $ref->catatan_pengirim; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="petugas_pengirim" class="col-lg-2 col-sm-3 control-label">Nama</label>
							<div class="col-lg-10 col-sm-9">
								<input type="text" id="petugas_pengirim" name="petugas_pengirim" class="form-control" data-input-title="Nama Pejabat Tujuan" value="<?php echo $ref->petugas_pengirim; ?>" readonly="readonly">
							</div>
						</div>
					</fieldset>
				</div>
				<div class="col-md-6">
					<fieldset>
						<legend class="contro-label">Penerima</legend>
						<div class="form-group">
							<label class="col-lg-2 col-sm-3 control-label">Tanggal</label>
							<div class="col-lg-10 col-sm-9">
								<input type="text" id="penerima_time" name="penerima_time" class="form-control" value="<?php echo $ref->penerima_time; ?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label for="catatan_penerima" class="col-lg-2 col-sm-3 control-label">Catatan</label>
							<div class="col-lg-10 col-sm-9">
								<textarea id="catatan_penerima" name="catatan_penerima" class="form-control" rows="3" placeholder="Catatan Penerima" data-input-title="Catatan Penerima" readonly="readonly" ><?php echo $ref->catatan_penerima; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="petugas_penerima" class="col-lg-2 col-sm-3 control-label">Nama</label>
							<div class="col-lg-10 col-sm-9">
								<input type="text" id="petugas_penerima" name="petugas_penerima" class="form-control" data-input-title="Nama Penerima" value="<?php echo $ref->petugas_penerima; ?>" readonly="readonly" >
							</div>
						</div>
					</fieldset>
				</div>
			</div>
		</div><!-- /.box-body -->
		<!-- div class="box-footer">
			Footer
		</div><!-- /.box-footer-->
	</div><!-- /.box -->
	
	<div class="box box-primary">
		<div class="box-body">
			<div class="row">
				<div class="col-md-4">
					<!-- button class="btn btn-app">
						<i class="fa fa-save"></i> Update
					</button -->
				</div>
				<div class="col-md-4" style="text-align: center;">
				
					<button type="button" class="btn btn-app" onclick="printPengantar();">
						<i class="fa fa-print"></i> Cetak
					</button>
					
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
		</div>
	</div>
<?php 
	echo form_close();
?>
</section><!-- /.content -->
<script type="text/javascript">
<!--
	$(document).ready(function() {
		$('#list-pengantar').dataTable({
			"aoColumnDefs" : [ {
	            'bSortable' : false,
	            'aTargets' : [ 0 ]
	        } ]
		});

		$('#check_all_detail').click(function(e) {
			if(this.checked) {
				$('.detail-check').each(function() {
					this.checked = true;
				});
			} else {
				$('.detail-check').each(function() {
					this.checked = false;
				});
			}
		});

		$('.select2').select2();

		$('#tujuan_unit').autocomplete({
			source: '<?php echo site_url('global/admin/internal_autocomplete')?>',
			minLength: 3,
			select: function(event, ui) {
				$('#tujuan_kode').val(ui.item.unit_code);
				$('#tujuan_unit_kode').html(ui.item.unit_code);
				$('#tujuan_unit_id').val(ui.item.id);
				$('#tujuan_nama').val(ui.item.nama_pejabat);
				$('#tujuan_dir').val(ui.item.instansi);
				
			}
		});
		
		$('#tujuan_unit').keyup(function() {
			if($(this).val().trim() == '') {
				$('#tujuan_kode').val('');
				$('#tujuan_unit_kode').html('________');
				$('#tujuan_unit_id').val('');
				$('#tujuan_nama').val('');
				$('#tujuan_dir').val('');
			}
		});
		
	});

	function printPengantar() {
		window.open('<?php echo site_url('surat/external/cetak_pengantar/' . $ref->pengantar_surat_eksternal_id); ?>');
	}
	
	function kirimData() {
		bootbox.confirm('Kirim Surat Pengantar.', function (result) {
			if(result) {
				$.ajax({
					type: "POST",
					url: "<?php echo str_replace($this->config->item('url_suffix'), "", site_url('global/dashboard/ajax_handler')); ?>/",
					data: {action: 'surat.eksternal_model.kirim_surat_pengantar', 
							ref_id: '<?php echo $ref->pengantar_surat_eksternal_id; ?>'
							},
					success: function(data){
						if(typeof(data.error) != 'undefined') {
							eval(data.execute);
						} else {
							bootbox.alert("Data transfer error!");
						}
					}
				});
			}
		});

	}

//-->
</script>