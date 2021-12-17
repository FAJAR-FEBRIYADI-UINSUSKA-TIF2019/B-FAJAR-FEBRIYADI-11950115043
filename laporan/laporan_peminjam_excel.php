<?php

	$koneksi = new mysqli("localhost","root","","db_rentalfajar");
	
	$filename = "peminjam_excel-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename=$filename");
	header("content-type: application/vdn.ms-excel");


?>

<h2>Laporan Peminjam</h2>
<table border="1">

	<tr>
		<th>No</th>
      	<th>NIK</th>
       	<th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
		<th>Tempat Tinggal</th>
	</tr>

	<?php
										
		$no = 1;
										
		$sql = $koneksi->query("select * from tb_peminjam");
										
		while ($data= $sql->fetch_assoc()){
											
		$jk = ($data['jk']=='L')?"Laki-Laki":"Perempuan";
										
	?>
	
	<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nik']; ?></td>
			<td><?php echo $data['nama'];?></td>
			<td><?php echo $data['tempat_lahir'];?></td>
			<td><?php echo $data['tgl_lahir'];?></td>
			<td><?php echo $jk;?></td>
			<td><?php echo $data['tempat_tinggal'];?></td>
											
		</tr>
									
	<?php } ?>
	
</table>