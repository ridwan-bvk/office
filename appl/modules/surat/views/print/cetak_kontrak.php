<?php 
	
	
?>
<div >
	<table class="daftar">
		<thead>
			<tr>
				<th colspan="11" style="padding: 8px;">
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
				<th colspan="11" style="padding: 8px;">
					<h4 style="margin-bottom: 5px;">LEMBAR KONTRAK</h4>
				</th>
			</tr>
			<tr>
				<th rowspan= "2" width="5%" STYLE="vertical-align:middle;" STYLE="text-align: center;"> No</th>
				<th rowspan= "2" width="10%" STYLE="vertical-align:middle;"> Mitra</th>
				<th rowspan= "2" width="10%" STYLE="vertical-align:middle;"> Tanggal Kontrak</th>
				<th rowspan= "2" width="10%" STYLE="vertical-align:middle;"> Status</th>
				<th Colspan= "2" STYLE="text-align: center;"> Durasi</th>
				<th rowspan= "2" width="12%"  STYLE="vertical-align:middle;"> Nilai Kontrak</th>
				<th rowspan= "2" width="10%" STYLE="vertical-align:middle;"> Jenis Kontrak</th>
				<th rowspan= "2" width="10%" STYLE="vertical-align:middle;"> Nomor Kontrak</th>
				<th rowspan= "2" width="10%"  STYLE="vertical-align:middle;"> Kode Kontrak</th>
				<th rowspan= "2" width="10%"  STYLE="vertical-align:middle;"> Perihal</th>
			</tr>
			<tr>
				<th width="10%" STYLE="text-align: center;"> Mulai</th>
				<th width="10%" STYLE="text-align: center;"> Selesai</th>
			</tr>
		</thead>
		
		<tbody>
<?php
	$no=0;//variabel no
	$list = $this->kontrak_model->get_kontrak_aktif_list();
//	echo $this->db->last_query();
	if(count($list) > 0) {
		foreach($list as $row) {
				$no++;
?>
				<tr>
					<td> <?php echo "$no"; ?></td>
<?php 
		$opt_mitra = $this->kontrak_model->get_referensi_full('mitra');
	
?>
					<td><?php echo ($row->status_berkas != '-') ? $opt_mitra[$row->status_berkas] : '-'; ?></td>
					<td><?php echo $row->surat_unit_lampiran; ?></td>
<?php
						if ($row->status == 2){
?>
							<td>Addendum 2</td>
<?php
						}else{
							if ($row->status == 1){
?>
								<td>Addendum 1</td>
<?php
							}else{
								if ($row->status == 0){
?>
									<td>Kontrak</td>
<?php
								}
							}
						}
?>			
					<td><?php echo $row->surat_awal; ?></td>
					<td><?php echo $row->surat_akhir; ?></td>
					<td><?php echo $row->surat_ringkasan; ?></td>
<?php 
	$opt_jenis_kontrak = $this->kontrak_model->get_referensi_full('jenis_kontrak');
?>
							<td><?php echo ($row->jenis_surat != '-') ? $opt_jenis_kontrak[$row->jenis_surat] : '-'; ?></td>
					<td><?php echo $row->surat_no; ?></td>
<?php 
	$opt_kode_kontrak = $this->kontrak_model->get_referensi_full('kode_kontrak');
?>
					<td><?php echo ($row->sifat_surat != '-') ? $opt_kode_kontrak[$row->sifat_surat] : '-'; ?></td>
					<td><?php echo $row->surat_perihal; ?></td>
				</tr>
<?php
		}
	}
?>
		</tbody>
	</table>
	
</div>
