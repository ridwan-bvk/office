<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Surat <small><?php echo $title; ?></small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-envelope"></i> Surat</a></li>
		<li class="active"><a href="#">Tugas</a></li>
	</ol>
</section>


<style>
	.select2-hidden-accessible {
		height: 34px !important;
		width: 100% !important;
		padding: 6px 12px !important;
		font-size: 14px !important;
		line-height: 1.4285713 !important;
		color: #555 !important;
		
	}
</style>

<!-- Main content -->
<section class="content">
<?php

	echo form_open_multipart('', ' id="form_surat_keluar" class="form-horizontal" onsubmit="return validateData($(this));"');
	echo form_hidden('mode', 'add');
	echo form_hidden('action', 'surat.tugas_model.insert_tugas'); 
	echo form_hidden('return', 'surat/tugas/tugas'); 
	
	echo form_hidden('function_ref_id', $function_ref_id); 
	echo form_hidden('function_ref_name', 'Tugas'); 
	echo form_hidden('jenis_agenda', 'ST'); 
	echo form_hidden('create_agenda', 1); 
	
	echo form_hidden('surat_from_ref', 'surat');
	echo form_hidden('surat_from_ref_id', get_user_data('unit_id'));
	
	echo form_hidden('surat_int_unit', get_user_data('unit_name'));
	echo form_hidden('surat_int_unit_id', get_user_data('unit_id'));
	echo form_hidden('surat_int_kode', get_user_data('unit_code'));
	
	$result = $this->admin_model->get_ref_internal(get_user_data('unit_id'));
	$unit = $result->row();
	
	echo form_hidden('official_code', $unit->official_code);
	echo form_hidden('surat_from_ref_data[dir]', $unit->instansi);
	echo form_hidden('surat_from_ref_data[jabatan]', $unit->jabatan);
	echo form_hidden('surat_from_ref_data[nama]', $unit->nama_pejabat);
	echo form_hidden('surat_from_ref_data[nip]', $unit->nip_pejabat);
?>

	<!-- Default box -->
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Identitas Surat</h3>
		</div>

		<div class="box-body">
		
			<div class="form-group">
				<label for="surat_no" class="col-lg-2 col-sm-3 control-label">Nomor Surat</label>
				<div class="col-lg-4 col-sm-9">
					<input type="text" id="surat_no" name="surat_no" class="form-control" data-input-title="Nomor Surat" value="<?php echo set_value('surat_no'); ?>">
				</div>
				
				<label for="surat_unit_lampiran" class="col-lg-2 col-sm-3 control-label">Nomor Surat Ref</label>
				<div class="col-lg-4 col-sm-9">
					<input id="surat_unit_lampiran" name="surat_unit_lampiran" class="form-control required" placeholder="Nomor Surat Ref" data-input-title="Nomor Surat Ref" value="<?php echo set_value('surat_unit_lampiran'); ?>">
				</div>
				
			</div>
			
			<div class="form-group">
				
				<label for="surat_tgl" title="Format dd-mm-yyyy" class="col-lg-2 col-sm-3 control-label">Tgl. Surat <br> (dd-mm-yyyy)</label>
				<div class="col-lg-4 col-sm-9">
					<div class="input-group">
						<input type="text" id="surat_tgl" name="surat_tgl" class="form-control datemulaipicker required" data-input-title="Tgl Terima" value="<?php echo date('d-m-Y'); ?>">
						<div class="input-group-addon">
							<i title="Format dd-mm-yyyy" class="fa fa-calendar"></i>
						</div>
					</div>
				</div>
				
				<label for="surat_tgl_masuk" title="Format dd-mm-yyyy" class="col-lg-2 col-sm-3 control-label">Tgl. Surat Ref <br> (dd-mm-yyyy) </label>
				<div class="col-lg-4 col-sm-9">

					<div class="input-group">
						<input type="text" id="surat_tgl_masuk" name="surat_tgl_masuk" class="form-control dateselesaipicker required" data-input-title="tgl Berakhir" value="<?php echo date('d-m-Y'); ?>">
						<div class="input-group-addon">
							<i title="Format dd-mm-yyyy" class="fa fa-calendar"></i>
						</div>
					</div>
				</div>
			</div>
			
			
			
	
			
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	
		<!-- Default box -->
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Menugaskan Kepada</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" title="Tambah Penerima Tugas.." onclick="addPenerima();"><i class="fa fa-plus"></i></button>
			</div>
		</div>
		<div id="list-penerima" class="box-body">
			<fieldset id="row_penerima_0" style="position: relative;">
				<legend></legend>

				<div class="form-group">
				<label for="surat_to_unit_unit_0" class="col-sm-2 control-label">Nama Unit Kerja <i class="fa fa-question" title="masukan minimal 3 karakter keyword untuk pencarian automatis..." style="color: #3c8dbc;"></i> </label>
					<div class="col-lg-10 col-sm-5">
						<div class="input-group">
							<input type="text" id="surat_to_unit_0" name="distribusi[0][nama_unitkerja]"  class="surat_int_unit form-control required" data-row-id="0" data-input-title="Nama Unit Kerja Penerima Tugas" value="" placeholder="Nama Unit Kerja Penerima Tugas...">
							<div id="surat_to_unit_kode_0" disabled="disabled"  class="input-group-addon">______</div>	
							<input type="hidden" id="surat_to_kode_0" name="distribusi[0][kode_unitkerja]" class="form-control required" data-input-title="Kode Instansi Unit" value="">
							<input type="hidden" id="surat_to_unit_id_0" name="distribusi[0][id]" value="">
							<input type="hidden" id="surat_to_dir_0" name="distribusi[0][dir]" value="">
							<input type="hidden" id="surat_to_jabatan_0" name="distribusi[0][jabatan]" value="">
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label for="surat_to_nama_0" class="col-sm-2 control-label">Nama</label>
					<div class="col-lg-4 col-sm-9">
						<input type="text" id="surat_to_nama_0" name="distribusi[0][nama]" class="form-control" data-input-title="Nama Pejabat Penerima Tugas" value="" placeholder="Nama Pejabat Penerima Tugas...">
					</div>
					<label for="surat_to_nip_0" class="col-sm-2 control-label">NIP</label>
					<div class="col-lg-4 col-sm-9">
						<input type="text" id="surat_to_nip_0" name="distribusi[0][nip]" class="form-control" data-input-title="NIP Pejabat Penerima Tugas" value="" placeholder="NIP Pejabat Penerima Tugas...">
					</div>
				</div>
				
				<div class="form-group">
					<label for="no_surat" class="col-lg-2 col-sm-3 control-label">Keperluan</label>
					<div class="col-lg-10 col-sm-9">
					<textarea id="surat_perihal" name="distribusi[0][keperluan]" class="form-control required" rows="3" placeholder="Perihal" data-input-title="Perihal" ><?php echo set_value('surat_perihal'); ?></textarea>
					</div>
				</div>
					
			</fieldset>
		</div><!-- /.box-body -->
	</div><!-- /.box -->

	
		<!-- Default box -->
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Tanda Tangan</h3>
		</div>
				<div id="list-tembusan" class="box-body">
					<div id="row_sign" class="form-group">
						<div class="col-lg-10 col-sm-9">
<?php 
	$p = 1;
	$list = $this->surat_model->get_all_parents(get_user_data('unit_id'));
	
	$opt_sign = array();
	if($unit->ske_sign == 1) {
		$opt_sign[$unit->id] = $unit->value;
	}
	
	$approval_type = (in_array($unit->level, array('L0', 'L1'))) ? 'direksi' : 'non_direksi';
	
	echo form_hidden('approval[' . $approval_type. '][' . $unit->id . '][index]', $p++);
	echo form_hidden('approval[' . $approval_type. '][' . $unit->id . '][unit_name]', $unit->value);
	echo form_hidden('approval[' . $approval_type. '][' . $unit->id . '][user_id]', $unit->user_id);
	echo form_hidden('approval[' . $approval_type. '][' . $unit->id . '][nip]', $unit->nip_pejabat);
	echo form_hidden('approval[' . $approval_type. '][' . $unit->id . '][jabatan]', $unit->jabatan);
	echo form_hidden('approval[' . $approval_type. '][' . $unit->id . '][nama_pejabat]', $unit->nama_pejabat);
	echo form_hidden('approval[' . $approval_type. '][' . $unit->id . '][email]', $unit->email);
	echo form_hidden('approval[' . $approval_type. '][' . $unit->id . '][status]', 0);
//	echo form_hidden('approval[' . $approval_type. '][diskusi]', '');
	echo form_hidden('approval[' . $approval_type. '][status]', 0);
	
	foreach ($list as $parent) {
		if($parent['ske_sign'] == 1) {
			$opt_sign[$parent['organization_structure_id']] = $parent['unit_name'];
		}
		
		/*if($parent['sub_id'] != 0) {
			$result = $this->admin_model->get_ref_internal($parent['sub_id']);
			$sub = $result->row();
			
			$approval_type = (in_array($sub->level, array('L0', 'L1'))) ? 'direksi' : 'non_direksi';
			
			echo form_hidden('approval[' . $approval_type. '][' . $sub->id . '][index]', $p++);
			echo form_hidden('approval[' . $approval_type. '][' . $sub->id . '][unit_name]', $sub->value);
			echo form_hidden('approval[' . $approval_type. '][' . $sub->id . '][user_id]', $sub->user_id);
			echo form_hidden('approval[' . $approval_type. '][' . $sub->id . '][nip]', $sub->nip_pejabat);
			echo form_hidden('approval[' . $approval_type. '][' . $sub->id . '][jabatan]', $unit->jabatan);
			echo form_hidden('approval[' . $approval_type. '][' . $sub->id . '][nama_pejabat]', $sub->nama_pejabat);
			echo form_hidden('approval[' . $approval_type. '][' . $sub->id . '][email]', $sub->email);
			echo form_hidden('approval[' . $approval_type. '][' . $sub->id . '][status]', 0);
			
		}*/
		
		$approval_type = (in_array($parent['level'], array('L0', 'L1'))) ? 'direksi' : 'non_direksi';
		
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][index]', $p++);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][unit_name]', $parent['unit_name']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][user_id]', $parent['user_id']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][nip]', $parent['nip']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][jabatan]', $parent['jabatan']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][nama_pejabat]', $parent['user_name']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][email]', $parent['email']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][status]', 0);
//		echo form_hidden('approval[' . $approval_type. '][diskusi]', '');
		echo form_hidden('approval[' . $approval_type. '][status]', 0);
		
	}
	
	echo form_dropdown('signed', $opt_sign, '', ' class="form-control"');
//	var_dump($list);
?>
						</div>
					</div>
				</div><!-- /.box-body -->
	</div><!-- /.box -->
	
	
	<!-- Default box -->
<!-- 	<div class="box box-primary"> -->
<!-- 		<div class="box-header with-border"> -->
<!-- 			<span class="h3 box-title">lampiran </span> <span class="small">Max. 2MB (*.pdf, *.jpg, *.jpeg, *.png, *.zip, *.rar)</span> -->
<!-- 			<div class="box-tools pull-right"> -->
			<!-- <button type="button" class="btn btn-box-tool" title="Tambah Lampiran.." onclick="addAttachment();"><i class="fa fa-plus"></i></button> -->
<!-- 			</div> -->
<!-- 		</div> -->
		
<!-- 		<div id="attachment_list" class="box-body"> -->
<!-- 			<div id="attachment_0" class="form-group"> -->
<!-- 				<div class="col-md-8"> -->
<!-- 					<input type="text" name="attachment[0][title]" class="form-control file-attachment" placeholder="Judul File ..."> -->
<!-- 				</div> -->
<!-- 				<div class="col-md-4"> -->
<!-- 					<div class="form-group"> -->
<!-- 						<div class="btn btn-default btn-file"> -->
<!-- 							<i class="fa fa-paperclip"></i> -->
<!-- 							<input type="file" name="attachment_file_0" onchange="$('#flabel_0').html($(this).val())"> -->
<!-- 						</div> -->
<!-- 						<label id="flabel_0"></label> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->
			
	
	<div class="box box-primary">
		<div class="box-body">
			<button class="btn btn-app">
				<i class="fa fa-save"></i> Simpan
			</button>
			
			<button type="button" class="btn btn-app" onclick="location.assign('<?php echo site_url('surat/keputusan/keputusan_list'); ?>');">
				<i class="fa fa-close"></i> Batal
			</button>
		</div>
	</div>
	
<?php 
	echo form_close();
?>			

</section><!-- /.content -->

<script type="text/javascript">

	$(document).ready(function() {
		
		$('#price').number( true, 2 );
				
		$('.datepicker').datepicker({autoclose : true, dateFormat : 'dd-mm-yy', //maxDate: 0
		});

		
		$('.datemulaipicker').datepicker({
			autoclose : true, 
			dateFormat : 'dd-mm-yy',
			//minDate : 1
		});
		
		$('.dateselesaipicker').datepicker({
			autoclose : true, 
			dateFormat : 'dd-mm-yy',
			//minDate : 2
		});
		
		$('.surat_ext_title').autocomplete({
			source: '<?php echo site_url('global/admin/eksternal_autocomplete')?>',
			minLength: 3,
			select: function(event, ui) {
				$('#surat_ext_nama').val(ui.item.nama_pejabat);
				$('#surat_ext_instansi').val(ui.item.instansi);
				$('#surat_ext_alamat').val(ui.item.address);
				
			}
		});
		
		$('.surat_ext_title').keyup(function() {
			if($(this).val().trim() == '') {
				$('#surat_ext_nama').val('');
				$('#surat_ext_instansi').val('');
				$('#surat_ext_alamat').val('');
			}
		});

		$('.surat_int_unit').autocomplete({
			source: '<?php echo site_url('global/admin/internal_autocomplete')?>',
			minLength: 3,
			select: function(event, ui) {
				r = $(this).attr('data-row-id');
				$('#surat_to_kode_' + r).val(ui.item.unit_code);
				$('#surat_to_unit_kode_' + r).html(ui.item.unit_code);
				$('#surat_to_unit_id_' + r).val(ui.item.id);
				$('#surat_to_jabatan_' + r).val(ui.item.jabatan);
				$('#surat_to_nama_' + r).val(ui.item.nama_pejabat);
				$('#surat_to_nip_' + r).val(ui.item.nip_pejabat);
				$('#surat_to_dir_' + r).val(ui.item.instansi);
				
			}
		});
		
		$('.surat_int_unit').keyup(function() {
			if($(this).val().trim() == '') {
				r = $(this).attr('data-row-id');
				$('#surat_to_kode_' + r).val('');
				$('#surat_to_unit_kode_' + r).html('________');
				$('#surat_to_unit_id_' + r).val('');
				$('#surat_to_nama_' + r).val('');
				$('#surat_to_nip_' + r).val('');
				$('#surat_to_dir_' + r).val('');
			}
		});

	});

	function saveRef(t) {
		if(validateData($('#asal-area'))) {
		
			$.ajax({
				type: "POST",
				url: "<?php echo str_replace($this->config->item('url_suffix'), "", site_url('global/dashboard/ajax_handler')); ?>/",
				data: {action: 'global.admin_model.save_ref', 
						jabatan: $('#surat_ext_title').val(),
						nama_pejabat: $('#surat_ext_nama').val(),
						instansi: $('#surat_ext_instansi').val(),
						address: $('#surat_ext_alamat').val(),
						ref_type: t},
				success: function(data){
					bootbox.alert(data.message);
				}
			});
		}
		return false;
	}

	function klasifikasiChange() {

		$('#klasifikasi').val($('#kode_klasifikasi_arsip option:selected').attr('data-klasifikasi'));
		$('#klasifikasi_sub').val($('#kode_klasifikasi_arsip option:selected').attr('data-klasifikasi_sub'));
		$('#klasifikasi_sub_sub').val($('#kode_klasifikasi_arsip option:selected').attr('data-klasifikasi_sub_sub'));
	}

	var penerimaRow =  0;
	
	function addPenerima() {
		penerimaRow++;
		
		row = '<fieldset id="row_penerima_' + penerimaRow + '" style="position: relative;">' +
				'<legend></legend>' +
				'<button type="button" class="btn btn-danger" onclick="removePenerima(' + penerimaRow + ')" title="Hapus penerima tugas..." style="position: absolute; z-index:1; padding: 1px 6px; top: 25px;"><i class="fa fa-minus"></i></button>' +
				'<div class="form-group">' +
				'	<label for="surat_in_unit_unit_' + penerimaRow + '" class="col-sm-2 control-label">Nama Unit Kerja <i class="fa fa-question" title="masukan minimal 3 karakter keyword untuk pencarian automatis..." style="color: #3c8dbc;"></i> </label>' +
				'		<div class="col-lg-10 col-sm-5">' +
				'			<div class="input-group">' +
				'				<input type="text" id="surat_to_unit_' + penerimaRow + '" name="distribusi[' + penerimaRow + '][nama_unitkerja]"  class="form-control required" data-row-id="' + penerimaRow + '" data-input-title="Nama Unit Kerja Penerima Tugas" value="" placeholder="Nama Unit Kerja Penerima Tugas...">' +
				'				<div id="surat_in_unit_kode_' + penerimaRow + '" disabled="disabled"  class="input-group-addon">______</div>' +
				'				<input type="hidden" id="surat_in_kode_' + penerimaRow + '" name="distribusi[' + penerimaRow + '][kode_unitkerja]" class="form-control required" data-input-title="Kode Instansi Unit" value="">' +
				'				<input type="hidden" id="surat_in_unit_id_' + penerimaRow + '" name="distribusi[' + penerimaRow + '][id]" value="">' +
				'				<input type="hidden" id="surat_in_dir_' + penerimaRow + '" name="distribusi[' + penerimaRow + '][dir]" value="">' +
				'				<input type="hidden" id="surat_in_jabatan_' + penerimaRow + '" name="distribusi[' + penerimaRow + '][jabatan]" value="">' +
				'			</div>' +
				'		</div>' +
				'	</div>' +
				'<div class="form-group">' +
				'	<label for="surat_in_nama_' + penerimaRow + '" class="col-sm-2 control-label">Nama</label>' +
				'	<div class="col-lg-4 col-sm-9">' +
				'		<input type="text" id="surat_in_nama_' + penerimaRow + '" name="distribusi[' + penerimaRow + '][nama]" class="form-control" data-input-title="Nama Pejabat Penerima Tugas" value="" placeholder="Nama Pejabat Penerima Tugas...">' +
				'	</div>' +
				'	<label for="surat_in_nip_' + penerimaRow + '" class="col-sm-2 control-label">Nama Unit Kerja</label>' +
				'	<div class="col-sm-3">' +
				'		<input type="text" id="surat_in_nip_' + penerimaRow + '" name="distribusi[' + penerimaRow + '][nip]" class="form-control" data-input-title="NIP Pejabat Penerima Tugas" value="" placeholder="NIP Pejabat Penerima Tugas...">' +
				'	</div>' +
				'</div>' +

				'<div class="form-group">' +
				'	<label for="surat_in_nip_' + penerimaRow + '" class="col-sm-2 control-label">Keperluan</label>' +
				'	<div class="col-sm-3">' +
				'		<textarea id="surat_perihal" name="distribusi[' + penerimaRow + '][keperluan]" class="form-control" rows="3"  data-input-title="Perihal" value="" placeholder="Perihal"></textarea>' +
				'	</div>' +
				'</div>' +

			'</fieldset>';

		$('#list-penerima').append(row);

		$('#surat_to_unit_' + penerimaRow).autocomplete({
			source: '<?php echo site_url('global/admin/internal_autocomplete')?>',
			minLength: 3,
			select: function(event, ui) {
				r = $(this).attr('data-row-id');
				$('#surat_in_kode_' + r).val(ui.item.unit_code);
				$('#surat_in_unit_kode_' + r).html(ui.item.unit_code);
				$('#surat_in_unit_id_' + r).val(ui.item.id);
				$('#surat_in_jabatan_' + r).val(ui.item.jabatan);
				$('#surat_in_nama_' + r).val(ui.item.nama_pejabat);
				$('#surat_in_nip_' + r).val(ui.item.nip_pejabat);
				$('#surat_in_dir_' + r).val(ui.item.instansi);
				
			}
		});

		$('#surat_to_unit_' + penerimaRow).keyup(function() {
			if($(this).val().trim() == '') {
				r = $(this).attr('data-row-id');
				$('#surat_in_kode_' + r).val('');
				$('#surat_in_unit_kode_' + r).html('________');
				$('#surat_in_unit_id_' + r).val('');
				$('#surat_in_nama_' + r).val('');
				$('#surat_in_nip_' + r).val('');
				$('#surat_in_dir_' + r).val('');
			}
		});
		
	}

	function removePenerima(rid) {
		$('#row_penerima_' + rid).remove();
	}
	
	var attachmentRow = 0;

	function addAttachment() {
		attachmentRow++;

		row = '<div id="attachment_' + attachmentRow + '" class="form-group">' +
			'	<div class="col-md-8">' +
			'		<div class="input-group">' +
			'			<div class="input-group-btn">' +
			'				<button type="button" class="btn btn-danger" onclick="removeAttachment(' + attachmentRow + ')" title="Hapus file..."><i class="fa fa-minus"></i></button>' +
			'			</div>' +
			'			<input type="text" name="attachment[' + attachmentRow + '][title]" class="form-control" placeholder="Judul File ...">' +
			'		</div>' +
			'	</div>' +
			'	<div class="col-md-4">' +
			'		<div class="form-group">' +
			'			<div class="btn btn-default btn-file">' +
			'				<i class="fa fa-paperclip"></i> ' +
			'				<input type="file" name="attachment_file_' + attachmentRow + '" onchange="$(\'#flabel_' + attachmentRow + '\').html($(this).val())">' +
			'			</div>' +
			'			<label id="flabel_' + attachmentRow + '"></label>' +
			'		</div>' +
			'	</div>' +
			'</div>';
		$('#attachment_list').append(row);
		
	}

	function removeAttachment(rid) {
		$('#attachment_' + rid).remove();
	}
	
// 	function toJSDate( date ) {

// 		var date = date.split("-");

// 		//(year, month, day, hours, minutes, seconds, milliseconds)
// 		//subtract 1 from month because Jan is 0 and Dec is 11
// 		return new Date(date[2], (parseInt(date[1])-1), date[0], 0, 0, 0, 0);

// 	}
	
// 	function tglBerlakuChange() {
// 		var date = $('.datemulaipicker').val().split("-");
// 		var nextDate = new Date(date[2], (parseInt(date[1])-1), (parseInt(date[0])+1), 0, 0, 0, 0);

// 		$('.dateselesaipicker').datepicker('option', 'minDate', new Date(nextDate));

// 		if(toJSDate($('.datemulaipicker').val()) > toJSDate($('.dateselesaipicker').val())) {
// 			$('.dateselesaipicker').val(nextDate.getDate() + '-' + (nextDate.getMonth() + 1) + '-' + nextDate.getFullYear())
// 		}
		
		
// 	}
	
// 	function tglMulaiChange() {
// 		var date = $('.datepicker').val().split("-");
// 		var nextDate = new Date(date[2], (parseInt(date[1])-1), (parseInt(date[0])+1), 0, 0, 0, 0);

// 		$('.datemulaipicker').datepicker('option', 'minDate', new Date(nextDate));

// 		if(toJSDate($('.datepicker').val()) > toJSDate($('.datemulaipicker').val())) {
// 			$('.datemulaipicker').val(nextDate.getDate() + '-' + (nextDate.getMonth() + 1) + '-' + nextDate.getFullYear())
// 		}
		
		
// 	}
	

</script>