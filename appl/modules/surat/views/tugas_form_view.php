<?php 
	list($agenda_date, $agenda_time) = explode(' ', $surat->created_time);
	list($agenda_hours, $agenda_second) = explode('.', $agenda_time);
	$agenda_date = db_to_human($agenda_date);
?>
<!-- Content Header (Page header) -->
<!--
<section class="content-header">
	<h1>Surat <small><?php echo $title; ?></small></h1>
	
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-envelope"></i> Surat</a></li>
		<li class="active"><a href="#">Tugas</a></li>
	</ol>
</section>
-->

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
	$process_approved_L2 = TRUE;
	$process_approved_L1 = TRUE;
	$process_approved_TU = TRUE;
	$param = (array) $surat;
	
	$approval = json_decode($surat->approval, TRUE);
	echo form_open_multipart('', ' id="form_kontrak" class="form-horizontal" onsubmit="return validateData($(this));"');
	echo form_hidden('mode', 'edit');
	echo form_hidden('function_ref_id', $function_ref_id); 
	echo form_hidden('function_ref_name', 'Tugas'); 
	echo form_hidden('surat_id', $surat->surat_id);
	echo form_hidden('surat_tgl', db_to_human($surat->surat_tgl));
	echo form_hidden('jenis_agenda', $surat->jenis_agenda);
	echo form_hidden('surat_to_ref_id', $surat->surat_to_ref_id);
	echo form_hidden('surat_from_ref_id', $surat->surat_from_ref_id);
	echo form_hidden('surat_int_unit', get_user_data('unit_name'));
	echo form_hidden('surat_int_unit_id', get_user_data('unit_id'));
	echo form_hidden('surat_int_kode', get_user_data('unit_code'));
	echo form_hidden('surat_from_ref', 'surat');
	echo form_hidden('surat_from_ref_id', get_user_data('unit_id'));
	

	$result = $this->admin_model->get_ref_internal(get_user_data('unit_id'));
	$unit = $result->row();
	
	echo form_hidden('surat_int_dir', $unit->instansi);
	echo form_hidden('surat_int_jabatan', $unit->jabatan);
	echo form_hidden('surat_int_nama', $unit->nama_pejabat);
	echo form_hidden('surat_int_nip', $unit->nip_pejabat);
?>


		<!-- Default box -->
	<div class="box box-primary collapsed-box">
		<div class="box-header with-border pad table-responsive">
			<h3 class="box-title">Status Proses</h3>
			<table class="table text-center">
				<tr>
<?php 
	$state_flow = array(); 
	$last_flow = 0;
	foreach($flow as $row) {
		if($row->flow_seq == $surat->status) {
			$flow_pos = 'btn-success';
		} elseif ($row->flow_seq < $process->flow_seq) {
			$flow_pos = 'btn-danger';
		} else {
			$flow_pos = 'btn-warning disabled';
		}
		$last_flow = $row->flow_seq;
		$state_flow[$row->flow_seq] = $row->title;
?>
					<td>
						<button type="button" class="btn btn-block <?php echo $flow_pos; ?>"><?php echo $row->title; ?></button>
					</td>
<?php 
	}
	$state_flow[99] = 'Arsip';
?>
				</tr>
			</table>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></button>
			</div>
		</div>

		<div class="box-body" style="display: none;">
			<table class="table no-margin">
				<thead>
					<tr>
						<th width="180">Waktu</th>
						<th width="150">Status</th>
						<th>User</th>
						<th>Note</th>
					</tr>
				</thead>
				<tbody>
<?php 
	foreach($flow_notes as $row) {
		
		list($flow_date, $flow_time) = explode(' ', $row->created_time);
		$flow_date = db_to_human($flow_date);
?>
					<tr>
						<td><?php echo $flow_date . ' ' . $flow_time; ?></td>
						<td><?php echo $state_flow[$row->flow_seq]; ?></td>
						<td><?php echo $row->user_name; ?></td>
						<td><?php echo $row->note; ?></td>
					</tr>
<?php 
	}
?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- Default box -->
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Identitas Surat</h3>
		</div>

		<div class="box-body">
			
			<div class="form-group">
				<label for="surat_no" class="col-lg-2 col-sm-3 col-xs-12 control-label">Agenda</label>
				<div class="col-lg-4 col-sm-4 col-xs-6">
					<div class="input-group">
						<div class="input-group-addon"><?php echo strtoupper($surat->jenis_agenda); ?></div>
						<input type="text" id="agenda_id" name="agenda_id" class="form-control" disabled="disabled" value="<?php echo $surat->agenda_id; ?>">
					</div>
				</div>
				<div class="col-lg-6 col-sm-5 col-xs-6">
					<div class="input-group">
						<input type="text" id="created_time" name="created_time" class="form-control" disabled="disabled" value="<?php echo $agenda_date; ?>" style="text-align: right;">
						<div class="input-group-addon"><?php echo $agenda_hours; ?></div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label for="surat_no" class="col-lg-2 col-sm-3 control-label">Nomor Surat</label>
				<div class="col-lg-4 col-sm-9">
					<input type="text" id="surat_no" name="surat_no" class="form-control" disabled="disabled" data-input-title="Nomor Surat" value="<?php echo $surat->surat_no; ?>" >
				</div>
				
				<label for="surat_unit_lampiran" class="col-lg-2 col-sm-3 control-label">Nomor Surat Ref</label>
				<div class="col-lg-4 col-sm-9">
					<input id="surat_unit_lampiran" name="surat_unit_lampiran" class="form-control required"  disabled="disabled" placeholder="Nomor Surat Ref" data-input-title="Nomor Surat Ref" value="<?php echo $surat->surat_unit_lampiran; ?>">
				</div>
				
			</div>
			
			<div class="form-group">
			<label for="surat_tgl" title="Format dd-mm-yyyy" class="col-lg-2 col-sm-3 control-label">Tgl. Surat <br> (dd-mm-yyyy)</label>
				<div class="col-lg-4 col-sm-9">
					<div class="input-group">
						<input type="text" id="surat_tgl" name="surat_tgl" class="form-control datemulaipicker required"  disabled="disabled" data-input-title="Tgl Terima" value="<?php echo db_to_human($surat->surat_tgl); ?>">
						<div class="input-group-addon">
							<i title="Format dd-mm-yyyy" class="fa fa-calendar"></i>
						</div>
					</div>
				</div>
				
				<label for="surat_tgl_masuk" title="Format dd-mm-yyyy" class="col-lg-2 col-sm-3 control-label">Tgl. Surat Ref <br> (dd-mm-yyyy) </label>
				<div class="col-lg-4 col-sm-9">

					<div class="input-group">
						<input type="text" id="surat_tgl_masuk" name="surat_tgl_masuk" disabled="disabled" class="form-control dateselesaipicker   disabled="disabled" required" data-input-title="tgl Berakhir" value="<?php echo db_to_human($surat->surat_tgl_masuk); ?>">
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
			</div>
		<div id="list-penerima" class="box-body">
<?php 
	$a = 0;
	$last_ttd=  0;
	$count = array();
	$tanda_tangan = json_decode($surat->distribusi, TRUE);
	
	if(isset($tanda_tangan)) {
		foreach($tanda_tangan as $signed) {
?>
			<fieldset id="row_penerima_0" style="position: relative;">
				<legend></legend>
				
				<div class="form-group">
				
					<label for="surat_to_nama_<?php echo $a; ?>" class="col-sm-2 control-label">Nama</label>
					<div class="col-lg-4 col-sm-9">
						<input type="text" id="surat_to_nama_<?php echo $a; ?>" disabled="disabled" name="distribusi[<?php echo $a; ?>][nama]" class="form-control" data-input-title="Nama Pejabat Penerima Tugas" value="<?php echo $signed ['nama']; ?>" placeholder="Nama Pejabat Penandatangan surat...">
					</div>
					
					<label for="surat_to_nip_<?php echo $a; ?>" class="col-sm-2 control-label">NIP</label>
					<div class="col-sm-3">
						<input type="text" id="surat_to_int_nip_<?php echo $a; ?>" disabled="disabled" name="distribusi[<?php echo $a; ?>][nip]" class="form-control" data-input-title="NIP Pejabat Penerima Tugas" value="<?php echo $signed ['nip']; ?>" placeholder="NIP Pejabat Penandatangan surat...">
					</div>
				</div>
				<div class="form-group">
					<label for="surat_to_nama_<?php echo $a; ?>" class="col-sm-2 control-label">Kode Unit Kerja</label>
					<div class="col-lg-4 col-sm-9">
						<input type="text" id="surat_to_nama_<?php echo $a; ?>" disabled="disabled" name="distribusi[<?php echo $a; ?>][kode_unitkerja]" class="form-control" data-input-title="Nama Pejabat Penerima Tugas" value="<?php echo $signed ['kode_unitkerja']; ?>" placeholder="Nama Pejabat Penandatangan surat...">
					</div>
					<label for="surat_to_nip_0" class="col-sm-2 control-label">Nama Unit Kerja</label>
					<div class="col-lg-4 col-sm-9">
						<input type="text" id="surat_to_int_nip_<?php echo $a; ?>" disabled="disabled" name="distribusi[<?php echo $a; ?>][nama_unitkerja]" class="form-control" data-input-title="NIP Pejabat Penerima Tugas" value="<?php echo $signed ['nama_unitkerja']; ?>" placeholder="NIP Pejabat Penandatangan surat...">
					</div>
				</div>
				<div class="form-group">
					<label for="no_surat" class="col-lg-2 col-sm-3 control-label">Keperluan</label>
					<div class="col-lg-10 col-sm-9">
					<textarea id="surat_perihal" name="distribusi[<?php echo $a; ?>][keperluan]" disabled="disabled" class="form-control required" rows="3" placeholder="Perihal" data-input-title="Perihal" ><?php echo $signed ['keperluan']; ?></textarea>
					</div>
				</div>
					
			</fieldset>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
<?php 
		$a++;
		$last_ttd=  $a;
		}
	}
	
	$approval = json_decode($surat->approval, TRUE);
	$obj_approval = json_decode($surat->approval);
	
	if(($surat->status > 1) && (isset($approval['non_direksi']))) {
		$non_dir = array($surat->created_id);
		foreach ($approval['non_direksi'] as $ak => $appr) {
			if(isset( $appr['unit_name'])) {
				$non_dir[] = $appr['user_id'];
			}
		}
		?>
	<div id="box-comment-draft" class="box box-primary  <?php echo $surat->status == 2 ? '' : 'collapsed-box'; ?>">
		<div class="box-header with-border">
			<h3 class="box-title">Verifikasi Administrasi </h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa <?php echo $surat->status == 2 ? 'fa-minus' : 'fa-plus'; ?>"></i></button>
			</div>
		</div>
		<div class="box-body">
		
				<div class="col-md-6">
<?php 
		foreach ($approval['non_direksi'] as $ak => $appr) {
			if(isset( $appr['unit_name'])) {
				//echo $appr['user_id'];
				$approved_non_direksi = $appr['status'];
?>
					
					<div class="form-group">
						<label id="pejabat_<?php $ak; ?>" class="col-md-12">
							<input type="checkbox" value="1" <?php echo ($appr['status'] == 1) ? 'checked="checked"' : ''; ?> <?php echo ($appr['user_id'] != get_user_id() || $surat->status > 2) ? 'disabled="disabled"' : ' onclick="setApproved($(this), \'non_direksi\', ' . $ak. ')"'; ?>> 
							<?php echo $appr['jabatan'] . ', ' . $appr['unit_name']; ?>
						</label>
					</div>
<?php 
			}
		}
	}
	if($surat->status > 1) {
		
		$dir = array($surat->created_id);
		foreach ($approval['direksi'] as $akdir=> $apprdir) {
			if(isset($apprdir['unit_name'])) {
				$dir[] = $apprdir['user_id'];
			}
		}
		
		foreach ($approval['direksi'] as $akdir => $apprdir) {
			//			echo $appr['user_id'] . '<br>' . get_user_id();
			if(isset($apprdir['unit_name'])) {
				$approved_direksi = $apprdir['status'];
?>
				<div class="form-group">
							<label id="pejabat_<?php $akdir; ?>" class="col-md-12">
								<input type="checkbox" value="1" <?php echo ($apprdir['status'] == 1) ? 'checked="checked"' : ''; ?> <?php echo ($apprdir['user_id'] != get_user_id() || $surat->status > 2) ? 'disabled="disabled"' : ' onclick="setApproved($(this), \'direksi\', ' . $akdir. ')"'; ?>> 
								<?php echo $apprdir['jabatan'] . ', ' . $apprdir['unit_name']; ?>
							</label>
				</div>
<?php 
			}
		}
?>
			</div>
		</div>
	</div>
<?php 
	}
?>			
	
		<!-- Default box -->
	<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Penanda Tangan</h3>
					<div class="box-tools pull-right">
						<!-- button type="button" class="btn btn-box-tool" title="Tambah Tembusan.." onclick="addTembusan();"><i class="fa fa-plus"></i></button -->
					</div>
				</div>
				<div id="list-tembusan" class="box-body">
					<div id="row_sign" class="form-group">
						<div class="col-sm-12">
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
	echo form_hidden('approval[' . $approval_type. '][diskusi]', array());
	echo form_hidden('approval[' . $approval_type. '][status]', 0);
	
	foreach ($list as $parent) {
		if($parent['ske_sign'] == 1) {
			$opt_sign[$parent['organization_structure_id']] = $parent['unit_name'];
		}
		
		/* if($parent['sub_id'] != 0) {
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
			
		} */
		
		$approval_type = (in_array($parent['level'], array('L0', 'L1'))) ? 'direksi' : 'non_direksi';
		
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][index]', $p++);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][unit_name]', $parent['unit_name']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][user_id]', $parent['user_id']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][nip]', $parent['nip']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][jabatan]', $parent['jabatan']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][nama_pejabat]', $parent['user_name']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][email]', $parent['email']);
		echo form_hidden('approval[' . $approval_type. '][' . $parent['organization_structure_id'] . '][status]', 0);
		echo form_hidden('approval[' . $approval_type. '][diskusi]', array());
		echo form_hidden('approval[' . $approval_type. '][status]', 0);
		
	}
	
	$signed = json_decode($surat->signed, TRUE);
	$param['signed|unit_id'] = $signed['unit_id'];
	$param['signed|unit_name'] = $signed['unit_name'];
	$param['signed|jabatan'] = $signed['jabatan'];
	$param['signed|nama_pejabat'] = $signed['nama_pejabat'];
	$param['signed|nip'] = $signed['nip'];
	echo form_dropdown('signed', $opt_sign, $signed['unit_id'], ' class="form-control" disabled="disabled"');
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
			
	
	<div id="box-process-btn" class="box box-primary">
		<div class="box-body">
			<div class="row">
				<div class="col-xs-4">
<?php 
	$enEdit = FALSE;
	if(!has_permission(1)) {
		if($surat->status != 99) {
//			if((get_role() == 5 && $surat->status <= 2) || (get_role() == 3 && $surat->status == 3)) {
			if(has_permission($process->permission_handle) && $process->modify == 1) {
				$enEdit = TRUE;
			}
		}
	} else {
		$enEdit = TRUE;
	}
	
	if($enEdit) {
?>
					<button type="button" class="btn btn-app" onclick="location.assign('<?php echo site_url('surat/tugas/tugas/' . $surat->surat_id); ?>');">
						<i class="fa fa-edit"></i> Edit
					</button>
<?php 	
	}
	if($surat->status > 2 && $surat->status < 4) {
?>
					<button type="button" class="btn btn-app" onclick="printSurat();">
						<i class="fa fa-print"></i> Cetak
					</button>
<?php 
	}
?>
				</div>
				
				<div class="col-xs-8">
<?php 
	if($surat->status != 99) {
		if(has_permission($process->permission_handle)) {
//		if($process->role_handle == get_role() && ($process->modify == 1  || $process->button_return != '-' || $process->button_process != '-')) {
			
			$approved = FALSE;
			if ($surat->status == 0 && $approval['direksi']['status'] == 1) {
				$approved = TRUE;
			}

			if ($surat->status == 2 && $approval['direksi']['status'] == 1) {
				$approved = TRUE;
			}

			if ($surat->status == 2 && $approved_direksi == 1) {
				$approved = TRUE;
			}

			if (in_array($surat->status, array(3, 4))) {
				$approved = TRUE;	
			}
			
			if($process->button_process != '-') {
?>
					<button id="btn-process" type="button" class="btn btn-app pull-right bg-green <?php echo (!$approved) ? 'hide' : ''; ?>" onclick="prosesData();">
						<i class="fa fa-caret-square-o-right"></i> <?php echo $process->button_process; ?>
					</button>
<?php 
			}
			
			if($surat->status <= 6) {
				$result = $this->disposisi_model->get_disposisi_from_ref('surat', $surat->surat_id);
// 				var_dump($result);
				if($process->button_return != '-' && ($result->num_rows() == 0)) {
?>
					<button id="btn-return" type="button" class="btn btn-app pull-right bg-red" onclick="returnData();">
						<i class="fa fa-caret-square-o-left"></i> <?php echo $process->button_return; ?>
					</button>
<?php 
				}
			}
		}

			if(get_user_data('unit_id') == $surat->surat_from_ref_id && $surat->status == 5) {
			?>
					<button type="button" class="btn btn-app pull-right bg-green" onclick="prosesArsipUnit();">
						<i class="fa fa-caret-square-o-right"></i> Simpan Sebagai Arsip
					</button>
<?php 
		}
	} else {

		if ($surat->unit_archive_status != 99 && $surat->status != 99)
		{
?>
		<button type="button" class="btn btn-app pull-right bg-green" onclick="prosesArsipUnit();">
		<i class="fa fa-caret-square-o-right"></i> Simpan Sebagai Arsip
		</button>
<?php	
		}
	}
?>
				</div>
			</div>
		</div>
		<div class="overlay hide">
			<i class="fa fa-refresh fa-spin"></i>
		</div>
	</div>
	
<?php 
	echo form_close();
?>			

</section><!-- /.content -->

<script type="text/javascript">

	$(document).ready(function() {
		
		$(".select2").select2();
		
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
	
	function returnData() {
		$('#box-process-btn .overlay').removeClass('hide');
		bootbox.prompt({
			title: 'Kembalikan berkas.', 
			inputType: 'textarea',
			callback: function(result){
				if(result) {
					$.ajax({
						type: "POST",
						url: "<?php echo str_replace($this->config->item('url_suffix'), "", site_url('global/dashboard/ajax_handler')); ?>/",
						data: {action: 'surat.eksternal_model.return_data', 
								ref_id: '<?php echo $surat->surat_id; ?>', 
								note: result, 
								last_flow: <?php echo $last_flow; ?>,
								function_ref_id: <?php echo 2; ?>,
								flow_seq: <?php echo $surat->status; ?>
							},
						success: function(data) {
							if(typeof(data.error) != 'undefined') {
								eval(data.execute);
							} else {
								bootbox.alert("Data transfer error!");
								$('#box-process-btn .overlay').addClass('hide');
							}
						}
					});
				} else {
					$('#box-process-btn .overlay').addClass('hide');
				}
			}
		});
	}
	
	function prosesArsipUnit() {
		$('#box-process-btn .overlay').removeClass('hide');
		bootbox.confirm('Simpan sebagai Arsip?', function(result){
			if(result) {
				location.assign('<?php echo site_url('surat/tugas/register_arsip/' . $surat->surat_id); ?>');	 
			} else {
				$('#box-process-btn .overlay').addClass('hide');
			}
		});
	}
	
	function prosesData() {
		$('#box-process-btn .overlay').removeClass('hide');
		bootbox.confirm('<?php echo $process->check_field_info; ?>', function(result){
			if(result) {
				$.ajax({
					type: "POST",
					url: "<?php echo str_replace($this->config->item('url_suffix'), "", site_url('global/dashboard/ajax_handler')); ?>/",
					data: {action: 'surat.tugas_model.proses_data', 
							ref_id: '<?php echo $surat->surat_id; ?>', 
							note: result, 
							last_flow: <?php echo $last_flow; ?>,
							function_ref_id: <?php echo 13; ?>,
							flow_seq: <?php echo $surat->status; ?>,
							function_handler: '<?php echo $process->check_field_function; ?>'
							},
					success: function(data){
						if(typeof(data.error) != 'undefined') {
							eval(data.execute);
						} else {
							bootbox.alert("Data transfer error!");
							$('#box-process-btn .overlay').addClass('hide');
						}
					}
				});
			} else {
				$('#box-process-btn .overlay').addClass('hide');
			}
		});
		
	}
	<?php 
//			if($active) {
		?>
			function setApproved(e, cid, uid) {
				var ap = e.is(':checked') ? 1 : 0;

				$.ajax({
					type: "POST",
					url: "<?php echo str_replace($this->config->item('url_suffix'), "", site_url('global/dashboard/ajax_handler')); ?>/",
					data: {action: 'surat.surat_model.set_approve', 
							ref_id: '<?php echo $surat->surat_id; ?>', 
							distribusi_id: cid, 
							unit_id: uid,
							approval: ap
						},
					
					success: function(data) {
						if(typeof(data.error) != 'undefined') {
							if(data.error == 0) {
								bootbox.alert(data.message);
							} else {
								bootbox.alert(data.message);
							}
						} else {
							bootbox.alert("Data transfer error!");
						}
					}
				});
				
			}
		<?php
//			}
		?>
<?php 
			if($surat->status > 2) {
?>
				function printSurat() {
					window.open('<?php echo site_url('surat/tugas/cetak/' . $surat->surat_id . '/' . strtoupper($surat->jenis_agenda)); ?>');
				}
<?php 
			}
?>

</script>