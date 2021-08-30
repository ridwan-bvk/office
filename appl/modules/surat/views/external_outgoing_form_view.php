<link rel="stylesheet" href="<?php echo assets_url(); ?>/css/wysiwyg_view.css">

<!-- Main content -->
<section class="content">
<?php

	$param = (array) $surat;
		
	echo form_open_multipart('', ' id="form_surat_keluar" class="form-horizontal" onsubmit="return validateData($(this));"');
	echo form_hidden('mode', 'edit');
	echo form_hidden('action', 'surat.eksternal_model.update_surat'); 
	echo form_hidden('surat_id', $surat->surat_id);
//	echo form_hidden('surat_no', $surat->surat_no);
	echo form_hidden('surat_tgl', $surat->surat_tgl);
	echo form_hidden('jenis_agenda', 'SKE');
	echo form_hidden('function_ref_id', 2);
	echo form_hidden('return', 'surat/external/outgoing'); 
	
	echo form_hidden('surat_from_ref', 'internal');
	echo form_hidden('surat_from_ref_id', $surat->surat_from_ref_id);
	
	$result = $this->admin_model->get_ref_internal($surat->surat_from_ref_id);
	$unit = $result->row();
	
	echo form_hidden('official_code', $unit->official_code);
	echo form_hidden('surat_from_ref_data[kode]', $unit->unit_code);
	echo form_hidden('surat_from_ref_data[dir]', $unit->instansi);
	echo form_hidden('surat_from_ref_data[jabatan]', $unit->jabatan);
	echo form_hidden('surat_from_ref_data[nama]', $unit->nama_pejabat);
	echo form_hidden('surat_from_ref_data[nip]', $unit->nip_pejabat);
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
	<div class="box">
		
		<div class="box-body">
			<div class="form-group">
<?php 
	if($surat->surat_no == '{surat_no}') {
		$param['surat_no'] = $surat->kode_klasifikasi_arsip . '/' . $unit->official_code. '/________/' . date('Y');
	}

?>
				<label for="surat_no" class="col-lg-2 col-sm-3 control-label">Nomor Surat</label>
				<div class="col-lg-6 col-sm-3">
					<input type="text" id="surat_no" <?php echo ($surat->status < 5) ? '' : 'name="surat_no"'; ?> class="form-control" readonly="readonly" value="<?php echo $param['surat_no']; ?>">
				</div>
				<label for="surat_tgl" class="col-lg-2 col-sm-3 control-label">Tanggal Surat</label>
				<div class="col-lg-2 col-sm-3">
					<input type="text" id="surat_tgl" class="form-control" disabled="disabled" value="<?php echo db_to_human($surat->surat_tgl); ?>">
				</div>
			</div>
			
			<div class="form-group">
				<label for="no_surat" class="col-lg-2 col-sm-3 control-label">Perihal</label>
				<div class="col-lg-10 col-sm-9">
					<textarea id="surat_perihal" class="form-control" disabled="disabled" rows="3" ><?php echo $surat->surat_perihal; ?></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="surat_format" class="col-lg-2 col-sm-3 control-label">Format Template</label>
				<div class="col-lg-10 col-sm-9">
<?php 
	$list = $this->admin_model->get_template_surat(2);
	$opt_format = array('' => '--');
	foreach ($list->result() as $row) {
		$opt_format[$row->format_surat_id] = $row->format_title;
	}
?>
					<input type="text" id="format_surat_id" class="form-control" disabled="disabled" value="<?php echo $opt_format[$surat->format_surat_id]; ?>">
				</div>
			</div>
			
			<div class="form-group">
				<label for="surat_item_lampiran" class="col-lg-2 col-sm-3 control-label">Lampiran</label>
				<div class="col-lg-3 col-sm-9">
<?php 
	$opt_unit_lpr = $this->admin_model->get_system_config('unit_lpr');
?>
					<input type="text" id="surat_item_lampiran" class="form-control" disabled="disabled" value="<?php echo $surat->surat_item_lampiran . ' ' . $opt_unit_lpr[$surat->surat_unit_lampiran]; ?>">
				</div>
				
				<label for="sifat_surat" class="col-lg-2 col-sm-3 control-label">Sifat Surat</label>
				<div class="col-lg-5 col-sm-9">
<?php 
	$opt_sifat_surat = $this->admin_model->get_system_config('sifat_surat');
	echo form_dropdown('sifat_surat', $opt_sifat_surat, $surat->sifat_surat, (' disabled="disabled" id="sifat_surat" class="form-control" '));
?>
				</div>
			</div>
		</div><!-- /.box-body -->
	</div><!-- /.box -->

	<div class="row">
		<div class="col-lg-6">
<?php 
	$surat_to_ref_data = json_decode($surat->surat_to_ref_data, TRUE);
	$param['surat_to_ref_data|title'] = $surat_to_ref_data['title'];
	$param['surat_to_ref_data|nama'] = $surat_to_ref_data['nama'];
	$param['surat_to_ref_data|instansi'] = $surat_to_ref_data['instansi'];
	$param['surat_to_ref_data|alamat'] = $surat_to_ref_data['alamat'];
?>
			<!-- Default box -->
			<div class="box box-primary collapsed-box">
				<div class="box-header with-border">
					<h3 class="box-title">Tujuan Surat</h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div id="list-tujuan" class="box-body" style="display: none;">
					<div class="form-group">
						<label for="surat_ext_title" class="col-sm-3 control-label">Jabatan <i class="fa fa-question" title="masukan minimal 3 karakter keyword untuk pencarian automatis..." style="color: #3c8dbc;"></i> </label>
						<div class="col-sm-9">
							<input type="text" id="surat_ext_title" name="surat_to_ref_data[title]" class="form-control" disabled="disabled" data-input-title="Jabatan Tujuan" value="<?php echo $surat_to_ref_data['title']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="surat_ext_nama" class="col-sm-3 control-label">Nama</label>
						<div class="col-sm-9">
							<input type="text" id="surat_ext_nama" name="surat_to_ref_data[nama]" class="form-control" disabled="disabled" data-input-title="Nama Tujuan" value="<?php echo $surat_to_ref_data['nama']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="surat_ext_instansi" class="col-sm-3 control-label">Instansi</label>
						<div class="col-sm-9">
							<input type="text" id="surat_ext_instansi" name="surat_to_ref_data[instansi]" class="form-control" disabled="disabled" data-input-title="Instansi Tujuan" value="<?php echo $surat_to_ref_data['instansi']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="surat_ext_alamat" class="col-sm-3 control-label">Alamat</label>
						<div class="col-sm-9">
							<input type="text" id="surat_ext_alamat" name="surat_to_ref_data[alamat]" class="form-control" disabled="disabled" data-input-title="Alamat Tujuan" value="<?php echo $surat_to_ref_data['alamat']; ?>">
						</div>
					</div>
					
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
		<div class="col-lg-6">
			<!-- Default box -->
			<div class="box box-primary collapsed-box">
				<div class="box-header with-border">
					<h3 class="box-title">Klasifikasi Arsip</h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></button>
					</div>
				</div>
		
				<div class="box-body" style="display: none;">
					<div class="form-group">
						<label for="no_surat" class="col-md-3 control-label">Kode</label>
						<div class="col-md-9">
							<input type="text" id="klasifikasi" class="form-control" disabled="disabled" value="<?php echo $surat->kode_klasifikasi_arsip; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="no_surat" class="col-md-3 control-label">Klasifikasi</label>
						<div class="col-md-9">
							<input type="text" id="klasifikasi" class="form-control" disabled="disabled" value="<?php echo $klasifikasi->nama_klasifikasi; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-3 control-label"></label>
						<div class="col-md-9">
							<input type="text" id="klasifikasi_sub" class="form-control" disabled="disabled" value="<?php echo $klasifikasi->nama_klasifikasi_sub; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-md-3 control-label"></label>
						<div class="col-md-9">
							<input type="text" id="klasifikasi_sub_sub" class="form-control" disabled="disabled" value="<?php echo $klasifikasi->nama_klasifikasi_sub_sub; ?>">
						</div>
					</div>
				</div>
			</div>
		
		</div>
		
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<!-- Default box -->
			<div class="box box-primary collapsed-box">
				<div class="box-header with-border">
					<h3 class="box-title">Tembusan</h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				
				<div id="tembusan_list" class="box-body" style="display: none;">
<?php 
	$i = 1;
	foreach (json_decode($surat->tembusan) as $tembusan) {
?>
					<div id="row_tembusan_<?php echo $i; ?>" class="form-group">
						<div class="col-sm-12">
							<input type="text" id="tembusan_<?php echo $i; ?>" name="tembusan[<?php echo $i; ?>]" class="form-control" data-input-title="Tembusan <?php echo $i; ?>" value="<?php echo $tembusan; ?>" disabled="disabled">
						</div>
					</div>

<?php 
	}
?>
				</div>				
			</div>
			
		</div>
		<div class="col-md-6">
			<!-- Default box -->
			<div class="box box-primary collapsed-box">
				<div class="box-header with-border">
					<h3 class="box-title">Lampiran</h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				
				<div id="attachment_list" class="box-body" style="display: none;">
<?php 
	$last_seq = 0;
	foreach ($attachment as $row) {
?>
					<div id="attachment_<?php echo $row->sort; ?>" class="col-md-12">
						<a href="<?php echo $row->file; ?>" target="_blank" title="<?php echo $row->file_name; ?>"><i class="fa fa-file-text-o"></i> </a> <label> <?php echo $row->title; ?> </label>
					</div>
<?php 
		$last_seq = $row->sort;
	}
?>
				</div>
				
			</div>
			
		</div>
	</div>
	
	<!-- div class="box box-primary">
		<div class="box-body">
			<button class="btn btn-app">
				<i class="fa fa-save"></i> Save
			</button>
		</div>
	</div -->

	<div id="box-konsep" class="box box-primary">
		<div id="all-konsep" class="hide">
<?php 
	$opt_konsep = array(0 => '--');
	$active_konsep = '';
	$konsep_text = '';
	if($konsep->num_rows() > 0) {
		$opt_konsep = array();
		foreach($konsep->result() as $row) {
			$opt_konsep[$row->konsep_surat_id] = $row->title . ' - Versi ' . $row->version;
			if($row->status == 1) {
				$active_konsep = $row->konsep_surat_id;
			}
?>
			<div id="konsep_<?php echo $row->konsep_surat_id; ?>" data-version="<?php echo $row->version; ?>" class="<?php echo ($row->status == 1) ? 'active ' : ''; ?>"><?php echo $row->konsep_text; ?></div>
<?php 
		}
		
		$konsep_text = '';
	} else {
		$result = $this->admin_model->get_template_surat(2, $surat->format_surat_id);
		
		if($result->num_rows() > 0) {
			$template = $result->row();
		} else {
			$template = new stdClass();
			$template->format_title = '';
			$template->format_text = '';
		}
		
		$konsep_text = sprintformat($template->format_text, $param);
	//	$konsep_text = sprintformat($template->format_text, $surat->surat_ext_nama, $surat->surat_ext_title, humanize($surat->surat_int_unit), $surat->surat_int_jabatan, humanize($surat->surat_int_unit), $surat->surat_int_nama, '');
	}
?>
		</div>
		<div class="box-header with-border">
			<h3 class="box-title"> Konsep Surat Keluar </h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body">
			<div class="form-group">
				<label for="surat_ext_alamat" class="col-sm-2 control-label">Versi Konsep</label>
				<div class="col-sm-4">
<?php 
		echo form_dropdown('konsep_surat_id', $opt_konsep, $active_konsep, (' id="konsep_surat_id" class="form-control" onchange="viewKonsep($(this).val());" '));
?>
				</div>
				<div class="col-sm-6"></div>
			</div>
			<div class="form-group">
				<div id="konsep_text" class="col-md-12">
					<!-- textarea name="konsep_text" ><?php echo $konsep_text; ?></textarea-->
				</div>
			</div>
		</div>
	</div>
	
<?php 

	$approval = json_decode($surat->approval, TRUE);
	$obj_approval = json_decode($surat->approval);
	
	if(($surat->status > 0) && (isset($approval['non_direksi']))) {
		$non_dir = array($surat->created_id);
		foreach ($approval['non_direksi'] as $ak => $appr) {
			if(isset( $appr['unit_name'])) {
				$non_dir[] = $appr['user_id'];
			}
		}
?>
	<div id="box-comment-draft" class="box box-primary  <?php echo $surat->status == 1 ? '' : 'collapsed-box'; ?>">
		<div class="box-header with-border">
			<h3 class="box-title"> Approval Draft </h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa <?php echo $surat->status == 1 ? 'fa-minus' : 'fa-plus'; ?>"></i></button>
			</div>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="col-md-6">
<?php 
		if(!isset($approval['non_direksi']['diskusi'])) {
			$obj_approval->non_direksi->diskusi = new stdClass();
		}
		$this->load->view('diskusi', array('id' => 'non_direksi', 'function_handle' => 'surat.surat_model.set_diskusi', 'script_handle' => 'draft', 'ref_id' => $surat->surat_id, 'diskusi' => $obj_approval->non_direksi->diskusi, 'active' => ($approval['non_direksi']['status'] == 0 && in_array(get_user_id(), $non_dir))));
?>				
				</div>
				<div class="col-md-6">
<?php 
		foreach ($approval['non_direksi'] as $ak => $appr) {
			if(isset( $appr['unit_name'])) {
				//echo $appr['user_id'];
?>
					
					<div class="form-group">
						<label id="pejabat_<?php $ak; ?>" class="col-md-12">
							<input type="checkbox" value="1" <?php echo ($appr['status'] == 1) ? 'checked="checked"' : ''; ?> <?php echo ($appr['user_id'] != get_user_id() || $surat->status > 1) ? 'disabled="disabled"' : ' onclick="setApproved($(this), \'non_direksi\', ' . $ak. ')"'; ?>> 
							<?php echo $appr['jabatan'] . ', ' . $appr['unit_name']; ?>
						</label>
					</div>
<?php 
			}
		}
?>
				</div>
			</div>
		
		</div>
	</div>
<?php 

	}
	
	if($surat->status > 1) {
		
		$dir = array($surat->created_id);
		foreach ($approval['direksi'] as $ak => $appr) {
			if(isset($appr['unit_name'])) {
				$dir[] = $appr['user_id'];
			}
		}
?>
	<div id="box-comment-verifikasi" class="box box-primary <?php echo $surat->status == 2 ? '' : 'collapsed-box'; ?>">
		<div class="box-header with-border">
			<h3 class="box-title"> Verifikasi Direksi </h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa  <?php echo $surat->status == 2 ? 'fa-minus' : 'fa-plus'; ?>"></i></button>
			</div>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="col-md-6">
<?php 
		if(!isset($approval['direksi']['diskusi'])) {
			$obj_approval->direksi->diskusi = new stdClass();
		}
		$this->load->view('diskusi', array('id' => 'direksi', 'function_handle' => 'surat.surat_model.set_diskusi', 'script_handle' => 'verifikasi', 'ref_id' => $surat->surat_id, 'diskusi' => $obj_approval->direksi->diskusi, 'active' => ($approval['direksi']['status'] == 0 && in_array(get_user_id(), $dir))));
?>				
				</div>
				<div class="col-md-6">
<?php 
		foreach ($approval['direksi'] as $ak => $appr) {
//			echo $appr['user_id'] . '<br>' . get_user_id();
			if(isset($appr['unit_name'])) {
?>
					
					<div class="form-group">
						<label id="pejabat_<?php $ak; ?>" class="col-md-12">
							<input type="checkbox" value="1" <?php echo ($appr['status'] == 1) ? 'checked="checked"' : ''; ?> <?php echo ($appr['user_id'] != get_user_id() || $surat->status > 2) ? 'disabled="disabled"' : ' onclick="setApproved($(this), \'direksi\', ' . $ak. ')"'; ?>> 
							<?php echo $appr['jabatan'] . ', ' . $appr['unit_name']; ?>
						</label>
					</div>
<?php 
			}
		}
?>
				</div>
			</div>
		</div>
	</div>
<?php 

	}
	
	if($surat->kirim_time) {
?>
	
	<!-- Default box -->
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Pengiriman</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
			</div>
		</div>
		
		<div class="box-body">
<?php 
		list($agenda_date, $agenda_time) = explode(' ', $surat->kirim_time);
		$agenda_date = db_to_human($agenda_date);
?>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="surat_no" class="col-sm-3 control-label">Agenda</label>
					<div class="col-sm-9">
						<div class="input-group">
							<div class="input-group-addon"><?php echo strtoupper($surat->jenis_agenda); ?></div>
							<input type="text" id="agenda_id" name="agenda_id" class="form-control" disabled="disabled" value="<?php echo $surat->agenda_id; ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-sm-12">
					<div class="input-group">
						<input type="text" id="created_time" name="created_time" class="form-control" disabled="disabled" value="<?php echo $agenda_date; ?>" style="text-align: right;">
						<div class="input-group-addon"><?php echo $agenda_time; ?></div>
					</div>
				</div>
			</div>
		</div>
<?php 
		$distribusi = json_decode($surat->distribusi, TRUE);
?>
			<div class="col-md-6">
				<div class="form-group">
					<label for="kirim_time" class="col-sm-3 control-label">Tanggal</label>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="text" id="kirim_time" name="kirim_time" class="form-control datetimepicker " disabled="disabled" data-input-title="Tgl Kirim" value="<?php echo date('d-m-Y H:i'); ?>">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="catatan_pengiriman-cara_pengiriman" class="col-sm-3 control-label">Cara Pengiriman</label>
					<div class="col-sm-9">
<?php 
		$opt_pengiriman = $this->admin_model->get_system_config('delivery_method');
		echo form_dropdown('distribusi[cara_pengiriman]', $opt_pengiriman, (isset($distribusi['cara_pengiriman']) ? $distribusi['cara_pengiriman'] : ''), (' id="distribusi-cara_pengiriman" class="form-control" disabled="disabled" data-input-title="Cara Pengiriman" onchange="caraChange($(this).val());"'));
?>	
					</div>
				</div>
				<div class="form-group">
					<label for="catatan_pengiriman-catatan" class="col-sm-3 control-label">Catatan</label>
					<div class="col-sm-9">
						<textarea id="catatan_pengiriman" name="catatan_pengiriman" class="form-control required" rows="2" disabled="disabled" placeholder="Catatan Pengiriman" data-input-title="Catatan" ><?php echo $surat->catatan_pengiriman; ?></textarea>
					</div>
				</div>
			</div>
			<div class="col-md-6">
<?php 
		foreach($opt_pengiriman as $k => $v) {
?>
				<div id="cara_pengiriman-<?php echo $k; ?>" class="extra-param hide"> 
<?php 
			$extra_param = $this->admin_model->get_system_config('delivery_param_' . $k);
			foreach($extra_param as $p_k => $p_v) {
?>
				<div class="form-group">
					<label for="catatan_pengiriman-<?php echo $p_k; ?>" class="col-sm-3 control-label"><?php echo $p_v; ?></label>
					<div class="col-sm-9">
						<input type="text" id="distribusi-<?php echo $p_k; ?>" name="distribusi[<?php echo $p_k; ?>]" class="form-control" placeholder="<?php echo $p_v; ?>" data-input-title="<?php echo $p_v; ?>" data-default="<?php echo (isset($distribusi[$p_k]) ? $distribusi[$p_k] : ''); ?>" disabled="disabled" value="<?php echo (isset($distribusi[$p_k]) ? $distribusi[$p_k] : ''); ?>" >
					</div>
				</div>
<?php 			
			}
?>
				</div>
<?php 
		}
?>				
			</div>
			
		</div>
		
	</div>
	
<?php 
	}
	
	echo form_close();
?>
	
	<div id="box-process-btn" class="box box-primary">
		<div class="box-body">
			<div class="row">
				<div class="col-xs-4">
<?php 
	$enEdit = FALSE;
	if(!has_permission(1)) {
		if($surat->status != 99) {
//			if((get_role() == 4 && $surat->status <= 2) || (get_role() == 5 && $surat->status <= 2) || (get_role() == 3 && $surat->status == 3)) {
			if(has_permission($process->permission_handle) && $process->modify == 1) {
				$enEdit = TRUE;
			}
		}
	} else {
		$enEdit = TRUE;
	}
	
	if($enEdit) {
?>
					<button type="button" class="btn btn-app" onclick="location.assign('<?php echo site_url('surat/external/outgoing/' . $surat->surat_id); ?>');">
						<i class="fa fa-edit"></i> Edit
					</button>
<?php 	
	}
	if($surat->status > 3 && $surat->status != 99) {
?>
					<button type="button" class="btn btn-app" onclick="printSurat();">
						<i class="fa fa-print"></i> Cetak
					</button>
<?php 
	}
	if($surat->status == 5 && $surat->surat_no == '{surat_no}' && $process->role_handle == get_role()) {
?>
					<button id="btn-set-no" type="button" class="btn btn-app" onclick="generateNomor();">
						<i class="fa fa-keyboard-o"></i> Set Nomor
					</button>
<?php 
	}
	if($surat->status == 6 && has_permission($process->permission_handle)) {
?>
					<button id="btn-set-no" type="button" class="btn btn-app" onclick="sendSurat();">
						<i class="fa fa-send"></i> Kirim Surat
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
			if($process->button_process != '-') {
				
				$approved = FALSE;
				if($surat->status == 1 && (isset($approval['non_direksi']) && $approval['non_direksi']['status'] == 1)) {
					$approved = TRUE;
				}
				
				if($surat->status == 2 && (isset($approval['direksi']) && $approval['direksi']['status'] == 1)) {
					$approved = TRUE;
				}
				
				if($surat->status == 5 && ($surat->surat_no != '{surat_no}')) {
					$approved = TRUE;
				}
				if(in_array($surat->status, array(3,4,6))) {
					$approved = TRUE;
				}
				
?>
					<button id="btn-process" type="button" class="btn btn-app pull-right bg-green <?php echo (!$approved) ? 'hide' : ''; ?>" onclick="prosesData();">
						<i class="fa fa-caret-square-o-right"></i> <?php echo $process->button_process; ?>
					</button>
<?php 
			}
			
		}
			if($surat->status <= 6 && (get_role() == 3 || get_role() == 4 || get_role() == 5)) {
//			$result = $this->disposisi_model->get_disposisi_from_ref('surat', $surat->surat_id);
// 			var_dump($result);
//			if($process->button_return != '-' && ($result->num_rows() == 0)) {
				if($process->button_return != '-') {
?>
					<button id="btn-return" type="button" class="btn btn-app pull-right bg-red" onclick="returnData();">
						<i class="fa fa-caret-square-o-left"></i> <?php echo $process->button_return; ?>
					</button>
<?php 
				}
			}
		
	
		if($surat->status >= 7 && $surat->status < 99) {
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
</section><!-- /.content -->
<script type="text/javascript">
//	$(document).ready(function() {
//		console.log('#konsep_surat_id : ' + $('#konsep_surat_id').val());

//	});
	
	function initPage() {
		$('#konsep_text').html($('#konsep_' + $('#konsep_surat_id').val()).html());

<?php 
	if($surat->kirim_time) {
?>
		caraChange('<?php echo $distribusi['cara_pengiriman']; ?>');
<?php 
	}
?>
	}

<?php 
	if($surat->kirim_time) {
?>
	
	function caraChange(v) {
		$('.extra-param').addClass('hide');
		$('.extra-param').find('input').each( function() { $(this).val($(this).attr('data-default')) });
	
		$('#cara_pengiriman-' + v).removeClass('hide');
	}

<?php 
	}
?>
	function viewKonsep(kid) {
		$('#konsep_text').html($('#konsep_' + kid).html());
	}

<?php 
	if($surat->status != 99) {
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
						data: {action: 'surat.surat_model.return_data', 
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

	function prosesData() {
		$('#box-process-btn .overlay').removeClass('hide');
<?php 
/*
	if($process->check_field_function != '-') {
?>
		bootbox.confirm('<?php echo $process->check_field_info; ?>', function(result){
			if(result) {
				location.assign('<?php echo site_url($process->check_field_function . '/' . $surat->surat_id); ?>');	 
			} else {
				$('#box-process-btn .overlay').addClass('hide');
			}
		});

<?php 
	} else {
*/
?>
		
		bootbox.confirm('<?php echo $process->check_field_info; ?>', function(result){
			if(result) {
				$.ajax({
					type: "POST",
					url: "<?php echo str_replace($this->config->item('url_suffix'), "", site_url('global/dashboard/ajax_handler')); ?>/",
					data: {action: 'surat.surat_model.proses_data', 
							ref_id: '<?php echo $surat->surat_id; ?>', 
							note: result, 
							last_flow: <?php echo $last_flow; ?>,
							function_ref_id: <?php echo 2; ?>,
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
		
<?php 
//	}
?>
	}
	
<?php 
		if($surat->status > 3) {
?>
	function printSurat() {
		window.open('<?php echo site_url('surat/external/cetak_surat_eksternal/' . $surat->surat_id); ?>');
	}
<?php 
		}
		if($surat->status == 5 && $surat->surat_no == '{surat_no}') {
?>

	function generateNomor() {
		$('#box-process-btn .overlay').removeClass('hide');
		bootbox.confirm('Buat Nomor Surat?', function(result){
			if(result) {
				$.ajax({
		 			type: "POST",
					url: "<?php echo str_replace($this->config->item('url_suffix'), "", site_url('global/dashboard/ajax_handler')); ?>/",
		 			data: {action: 'surat.surat_model.get_current_eksternal_no', 
							ref_id: '<?php echo $surat->surat_id; ?>',
							function_ref_id: <?php echo 2; ?>
		 					},
		 			success: function(data){
		 				if(typeof(data.error) != 'undefined') {
		 					$('#surat_no').val(data.surat_no);
		 					$('#surat_tgl').val(data.surat_tgl);
		 					$('#btn-process').removeClass('hide');
		 					$('#btn-set-no').addClass('hide');
		 					
		 					bootbox.alert(data.message);
							$('#box-process-btn .overlay').addClass('hide');
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
		
		}
		if($surat->status == 6 && has_permission($process->permission_handle)) {
?>
	function sendSurat() {
		location.assign('<?php echo site_url('surat/external/kirim_surat_keluar/' . $surat->surat_id); ?>');
	}

<?php 
		}
		
	}
?>

	function prosesArsipUnit() {
		$('#box-process-btn .overlay').removeClass('hide');
		bootbox.confirm('Simpan sebagai Arsip?', function(result){
			if(result) {
				location.assign('<?php echo site_url('surat/external/register_arsip/' . $surat->surat_id); ?>');	 
			} else {
				$('#box-process-btn .overlay').addClass('hide');
			}
		});
	}

</script>