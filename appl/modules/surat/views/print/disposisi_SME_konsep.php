<?php 
	
	
?>
<div >
	<table class="daftar">
		<thead>
			<tr>
				<th colspan="3" style="padding: 8px;">
					<table class="layout">
						<tr>
							<td align= "center" width="20%" >
								<img src="<?php echo site_url('assets/media/logo_kemenkes.png'); ?>" width="78" height="80">  
							</td>
					
							<td align="center" width= "100%">
								<span style="font-size: small;"> <b>KEMENTRIAN KESEHATAN RI<Br>
								DIREKTORAT JENDRAL PELAYANAN KESEHATAN</b><br></span>
								<SPAN> <h5>RUMAH SAKIT UMUM PUSAT <BR> H. ADAM MALIK</h5></SPAN>
									<span style="font-size: x-small;"> Jl. Bunga Lau No. 17 Medan Tuntungan Km. 12 Kotak Pos 246<Br>
								Telp (061) 8364581 - 8360143 - 8360051 Fax. 8360255<br>
								MEDAN - 20136</span>
							</td>
							<td align= "center" width= "20%">
							<img src="<?php echo site_url ('assets/media/logo.png'); ?>" width="90" height="30">  
							</td>
						</tr>
					</table>
				</th>
			</tr>
			<tr>
				<th colspan="3" style="padding: 8px;">
					<h4 style="margin-bottom: 5px;">LEMBARAN DISPOSISI DIREKTUR</h4>
				</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
				<td width="40%" style="padding: 8px 0; vertical-align: top;">
<?php 
	$opt_unit_lpr = $this->admin_model->get_system_config('unit_lpr');
?>
					<table class="layout">
						<tr>
							<td width="35%"><label>Nomor Agenda<br> Registrasi Surat</label></td>
							<td valign="top"><label style="font-weight: 400; "> : <?php echo $ref->jenis_agenda . '-' . $ref->agenda_id; ?></label></td>
						</tr>
					</table>
				</td>
				<td width="60%" style="padding: 8px 0; vertical-align: top;">
<?php  
	$opt_status_berkas = $this->admin_model->get_system_config('status_berkas');
	$opt_sifat_surat = $this->admin_model->get_system_config('sifat_surat');
	$opt_jenis_surat = $this->admin_model->get_system_config('jenis_surat');
?>
					<table class="layout">
						<tr>
							<td valign="top"><label>Sifat Surat</label></td>
							<td>
							<label style="font-weight: 400;"> : </label>
							<label style="font-weight: 400;"><span class="fa fa-square-o">&#xf096;</span> Rahasia</label><br/>&nbsp; 
							<label style="font-weight: 400;"> <span class="fa fa-square-o">&#xf096;</span> Segera</label><br/>&nbsp; 
							<label style="font-weight: 400;"> <span class="fa fa-square-o">&#xf096;</span> Sangat Segera</label><br/>&nbsp; 
							<label style="font-weight: 400;"> <span class="fa fa-square-o">&#xf096;</span> Biasa</label>
							<!--	
							<label style="font-weight: 400;"> : <?php echo $opt_sifat_surat[$ref->sifat_surat]; ?></label>--></td>
						</tr>
						<tr>
							<td width="23%"><label>Status</label></td>
							<td><label style="font-weight: 400;"> : <?php echo $opt_status_berkas[$ref->status_berkas]; ?></label></td>
						</tr>
						<tr>
							<td><label>Jenis</label></td>
							<td><label style="font-weight: 400;"> : <?php echo $opt_jenis_surat[$ref->jenis_surat]; ?></label></td>
						</tr>
					</table>
				</td>
			</tr>
	
			<tr>
				<td width="50%" style="padding: 8px 0; vertical-align: top;">
					<table class="layout">
						<tr>
							<td width="42%"><label>Tanggal Penerimaan</label></td>
							<td><label style="font-weight: 400;"> : <?php echo db_to_human($ref->surat_tgl_masuk); ?></label></td>
						</tr>
					</table>
				</td>
				<td width="50%" style="padding: 8px 0; vertical-align: top;">
					<table class="layout">
						<tr>
							<td width="42%"><label>Tanggal Penyelesaian</label></td>
							<td><label style="font-weight: 400;"> : <?php //echo db_to_human($disposisi->target_selesai); ?>
						</tr>
					</table>
				</td>
			</tr>
		<?php 	
			/**<tr>
				<td colspan="2" class="center" style="padding: 8px 0; vertical-align: top;" >
					<label><?php echo ($disposisi->sifat == 2) ? '<i class="fa fa-check-square-o">&#xf046;</i>' : '<i class="fa fa-square-o">&#xf096;</i>'; ?> Sangat Segera</label> &nbsp; &nbsp; &nbsp;
					<label><?php echo ($disposisi->sifat == 1) ? '<i class="fa fa-check-square-o">&#xf046;</i>' : '<i class="fa fa-square-o">&#xf096;</i>'; ?> Segera</label> &nbsp; &nbsp; &nbsp;
					<label><?php echo ($disposisi->sifat == 0) ? '<i class="fa fa-check-square-o">&#xf046;</i>' : '<i class="fa fa-square-o">&#xf096;</i>'; ?> Biasa</label> &nbsp; &nbsp; &nbsp;
				</td>
			</tr>
			*/
		?>	
			<tr>
				<td colspan="3" style="padding: 5px;">
<?php
	$surat_from_ref_data = json_decode($ref->surat_from_ref_data, TRUE);
?>
					<table class="layout">
						<tr>
							<td width="25%" valign="top">
								<label class="col-md-2" style="vertical-align: top; ">Tanggal dan Nomor Surat</label>
							</td>
							<td valign="top" width="0.3in">
								<label class="col-md-2" style="font-weight: 200; vertical-align: top; ">: </label>
							</td>
							<td align = "justify">
								<label class="col-md-10" style="font-weight: 400; vertical-align: top; "> <?php echo db_to_human($ref->surat_tgl); ?> & <?php echo $ref->surat_no; ?></label>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<label class="col-md-2" style="vertical-align: top;">Dari</label>
							</td>
							<td valign="top">
								<label class="col-md-2" style="font-weight: 200; vertical-align: top;"> : </label></label>
							</td>
							<td align = "justify">
								<label class="col-md-10" style="font-weight: 400; vertical-align: top;"> <?php echo $surat_from_ref_data['nama'] . ' &nbsp; | &nbsp; ' . $surat_from_ref_data['title'] . ' &nbsp; | &nbsp; ' . $surat_from_ref_data['instansi']; ?></label></label>
							</td>
						</tr>
						<tr>
							<td  valign="top">
								<label class="col-md-2" style="vertical-align: top;  ">Ringkasan Isi</label>
							</td>
							<td valign="top">
								<label class="col-md-2" style="font-weight: 200; vertical-align: top; "> : </label>
							</td>
							<td align = "justify">
								<label class="col-md-10" style="font-weight: 400; vertical-align: top; "><?php echo $ref->surat_perihal; ?></label>
							</td>
						</tr>
						<tr>
							<td valign="top">	
								<label class="col-md-2" style="vertical-align: top; ">Lampiran</label>
							</td>
							<td valign="top">
								<label class="col-md-2" style="font-weight: 200; vertical-align: top; ">: </label>
							</td>
							<td align = "justify">
								<label class="col-md-10" style="font-weight: 400; vertical-align: top; "><?php echo $ref->surat_item_lampiran . ' ' . $opt_unit_lpr[$ref->surat_unit_lampiran]; ?></label>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td width="50%" style="padding: 8px 0; vertical-align: top;" align = "center">
					<table class="layout">
						<tr>
							<td width="42%" style="padding: 8px 0; vertical-align: top;"><label>Informasi / Instruksi</label></td>
						</tr>
					</table>
				</td>
				<td width="50%" style="padding: 8px 0; vertical-align: top;" align = "center">
					<table class="layout">
						<tr>
							<td width="42%" style="padding: 8px 0; vertical-align: top;"><label>Diteruskan Kepada</label></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td width="50%" style="padding: 8px 1; vertical-align: top; height: 500px; ">
					<table class="layout">
						<tr>
							<td align = "justify"><label style="font-weight: 400;"> <?php //echo $disposisi->instruksi; ?></label></td>
						</tr>
					</table>
				</td>
				<td width="50%" style="padding: 8px 1; vertical-align: top; height: 500px; ">
					<table class="layout">
<?php
	$i = 1;
/*	$distribusi = array();
	if($ref->distribusi != '') {
		$distribusi = json_decode($ref->distribusi, TRUE);
	}
	if(!isset($distribusi['direksi'])) {
		$distribusi['direksi'] = array();
	}
	if(!isset($distribusi['non_direksi'])) {
		$distribusi['non_direksi'] = array();
	}
	
	$list = $this->admin_model->get_direksi();
	foreach($list->result() as $row) {
?>					
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<?php echo (isset($distribusi['direksi'][$row->organization_structure_id])) ? '<span class="fa fa-check-square-o">&#xf046;</span>' : '<span class="fa fa-square-o">&#xf096;</span>'; ?>
								<?php echo $row->unit_name;?>
							</td>
						</tr>
<?php
	}
	
	$list = $this->admin_model->get_non_direksi('K');
//	$opt_pejabat = array();
	foreach ($list->result() as $row) {
//		if(in_array($row->organization_structure_id, $distribusi['non_direksi'])) {
//			$opt_pejabat[$row->organization_structure_id] = $row->unit_name; 
//		}
//	}
	
//	foreach($opt_pejabat as $k => $v) {
?>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<?php echo (isset($distribusi['non_direksi'][$row->organization_structure_id])) ? '<span class="fa fa-check-square-o">&#xf046;</span>' : '<span class="fa fa-square-o">&#xf096;</span>'; ?>
								<?php echo $row->unit_name; ?>
							</td>
						</tr>
<?php
	}
	
	$list = $this->admin_model->get_non_direksi('L2');
	foreach ($list->result() as $row) {
?>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<?php echo (isset($distribusi['non_direksi'][$row->organization_structure_id])) ? '<span class="fa fa-check-square-o">&#xf046;</span>' : '<span class="fa fa-square-o">&#xf096;</span>'; ?>
								<?php echo $row->unit_name; ?>
							</td>
						</tr>
<?php
	}
*/
?>

						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Direktur Utama / KPA
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Direktur Medik dan Keperawatan
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Direktur SDM dan Pendidikan
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Direktur Keuangan
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Direktur Umum dan Operasional
							</td>
						</tr>
						
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Ketua Komite Medik 
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Ketua Komite Etik dan Hukum 
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Komite Keperawatan
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Komite Mutu & Keselamatan Pasien
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Komite PPIRS
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Ketua SPI 
							</td>
						</tr>
						
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kabid Pelayanan Medik
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kabid Pelayanan Keperawatan
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kabid Pelayanan Penunjang
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kabag SDM
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kabag Pendidikan & Penelitian
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kabag Program & Anggaran
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kabag Perbendaharaan & Mobilisasi Dana
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kabag Akuntansi & Verifikasi
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kabag Data & Informasi
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kabag Hukum, Organisasi & Hubungan Masyarakat 
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kabag Umum
							</td>
						</tr>
						
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Kepala SMF ...............................................
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								PPK ............................................................
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								ULP ............................................................
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Tim K3 RS 
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								Instalasi .....................................................
							</td>
						</tr>
						<tr>
							<td class="center" width="0.3in"><?php echo $i++;?>.</td>
							<td>
								<span class="fa fa-square-o">&#xf096;</span>
								...................................................................
							</td>
						</tr>
						
					</table>
				</td>
			</tr>
		</tbody>
	</table>
	
</div>
<footer>
<div style="font-size: 8pt; padding-top: 4px;">
	<table class="layout">
		<tr>
			<td><br>system id : <?php echo $ekspedisi_id; ?></br></td>
			<td align="right"><br>printed on : <?php echo date('Y-m-d H:i:s'); ?></br></td>
		</tr>
	</table>	
</div>
</footer>