<?php

	$koneksi = new mysqli("localhost","root","","db_rentalfajar");
	
	$filename = "transportasi_excel-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename=$filename");
	header("content-type: application/vdn.ms-excel");


?>

<h2>Laporan Transportasi</h2>
<table border="1">
	
	<tr>
		<th>Nomor Transport</th>
		<th>Nama</th>
		<th>Nomor Mesin</th>
		<th>Merek</th>
		<th>Plat</th>
		<th>Jumlah Transport</th>
		<th>Harga/Hari</th>
   </tr>
	
	<?php
										
		$no = 1;
										
		$sql = $koneksi->query("select * from tb_transportasi");
										
		while ($data= $sql->fetch_assoc()){
											
	?>
	
	<tr>
										
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nama_transport'];?></td>
		<td><?php echo $data['nomor_mesin'];?></td>
		<td><?php echo $data['merek'];?></td>
		<td><?php echo $data['plat'];?></td>
		<td><?php echo $data['jumlah_transportasi'];?></td>
		<td><?php echo $data['harga_hari'];?></td>

	</tr>
									
	<?php } ?>
	
</table>