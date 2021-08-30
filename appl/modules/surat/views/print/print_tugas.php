<?php 
$a = 0;
$last_ttd=  0;
$count = array();
$penerima = json_decode($ref->distribusi, TRUE);

if(isset($penerima)) {
	foreach($penerima as $tugas) {
	
?>
<div >
	<table class="daftar">
		<thead>
			<tr>
				<th style="padding: 8px;">
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
			
		</thead>
	
<?php 
		list($y, $F, $d) = explode('-', $ref->surat_tgl_masuk);
?>	
		
		<tbody>
			<tr>
				<td  style="border-bottom-style: none !important;">
					<table class="layout">
						<tr>
							<td style="padding: 8px; text-align: center;  ">
							<br>
							<br>
							<br>
							<br>
							<br>
								<h4 style="margin-bottom: 2px; !important">SURAT TUGAS</h4>
							</td>
						</tr>
						<tr>
							<td style="padding: 3px; text-align: center;">
								<h5 style="margin-bottom: 8px; ">NOMOR: <?php echo $ref->surat_no; ?></h4>
							</td>
						</tr>
						<br>
						
						<tr>
							<td style="padding: 8px;  border-bottom-style: none !important; text-align: justify; text-indent: 1in;">
								<p> 
								&nbsp;&nbsp;&nbsp; Sehubungan dengan surat saudara nomor <?php echo $ref->surat_unit_lampiran; ?> Tanggal <?php echo $d; ?> Bulan <?php echo $F; ?> Tahun <?php echo $y; ?>. Dengan Ini kami menugasi:  
								</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td style="padding: 8px; border-bottom-style: none; border-top-style: none;">
				<fieldset id="row_penerima_0" style="position: relative;">
				<legend></legend>
				
					<table class="layout">
						<tr>
								<td width="25%" valign="top">
									<label class="col-md-2" style="vertical-align: top; ">Nama</label>
								</td>
								<td valign="top" width="0.3in">
									<label class="col-md-2" style="font-weight: 200; vertical-align: top; ">: </label>
								</td>
								<td align = "justify">
									<label class="col-md-10" style="font-weight: 400; vertical-align: top; "> <?php echo $tugas['nama']; ?></label>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<label class="col-md-2" style="vertical-align: top;">NIP</label>
								</td>
								<td valign="top">
									<label class="col-md-2" style="font-weight: 200; vertical-align: top;"> : </label></label>
								</td>
								<td align = "justify">
									<label class="col-md-10" style="font-weight: 400; vertical-align: top;"> <?php echo $tugas['nip']; ?></label></label>
								</td>
							</tr>
							<tr>
								<td  valign="top">
									<label class="col-md-2" style="vertical-align: top;  ">Kode Unit Kerja</label>
								</td>
								<td valign="top">
									<label class="col-md-2" style="font-weight: 200; vertical-align: top; "> : </label>
								</td>
								<td align = "justify">
									<label class="col-md-10" style="font-weight: 400; vertical-align: top; "><?php echo $tugas['kode_unitkerja']; ?></label>
								</td>
							</tr>
							<tr>
								<td valign="top">	
									<label class="col-md-2" style="vertical-align: top; ">Nama Unit Kerja</label>
								</td>
								<td valign="top">
									<label class="col-md-2" style="font-weight: 200; vertical-align: top; ">: </label>
								</td>
								<td align = "justify">
									<label class="col-md-10" style="font-weight: 400; vertical-align: top; "><?php echo $tugas['nama_unitkerja']; ?></label>
								</td>
							</tr>
							<tr>
								<td valign="top">	
									<label class="col-md-2" style="vertical-align: top; ">Keperluan</label>
								</td>
								<td valign="top">
									<label class="col-md-2" style="font-weight: 200; vertical-align: top; ">: </label>
								</td>
								<td align = "justify">
									<label class="col-md-10" style="font-weight: 400; vertical-align: top; "><?php echo $tugas['keperluan']; ?></label>
								</td>
							</tr>
						</table>
					</fieldset>
				</td>
			</tr>

			<tr colspan="3">
				
				<td style="text-align: justify; text-indent: 0.5in; padding: 8px; border-bottom-style: none; border-top-style: none;">
					<table class="layout">
						<tr>
							<td>
								<p > 
								Agar yang bersangkutan melaksanakan tugas dengan baik dan penuh tanggung jawab.
								</p>
							</td>
						</tr>
					</table>
				</td>
				
			</tr>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
	$signed = json_decode($ref->signed, TRUE);
?>
				
			<tr>
				<td class="center" style="border-top-style: none;">&nbsp;
				<table class="layout">
					<tbody>
						<tr>
							<td width="50%">&nbsp;</td>
							<td><?php echo db_to_human($ref->surat_tgl); ?><br /><strong><?php echo /*$signed['jabatan'] . ' &nbsp; | &nbsp; ' .*/ $signed['unit_name']; ?></strong><br />
							<br />
							<br />
							<br />
							<strong><?php echo  $signed['nama_pejabat']; ?> </strong><br />
							NIP : <strong><?php echo $signed['nip'];?> </strong></td>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	

						</tr>
					</tbody>
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
<?php 
		$a++;
		$last_ttd=  $a;
	}
}
?>