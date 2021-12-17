<?php

	$koneksi = new mysqli("localhost","root","","db_rentalfajar");
	include "../function.php";
	
	$filename = "transaksi_excel-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename=$filename");
	header("content-type: application/vdn.ms-excel");


?>

<h2>Laporan Transaksi</h2>
<table border="1">
	
<tr>
	<th>No</th>
    <th>Nama Transport</th>
    <th>NIK</th>
    <th>Nama Peminjam</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
	<th>Terlambat</th>
	<th>Status</th>
</tr>

<?php
										
$no = 1;
										
$sql = $koneksi->query("select * from tb_transaksi where status='pinjam'");
										
	while ($data= $sql->fetch_assoc()){

?>
										
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nama_transport']; ?></td>
		<td><?php echo $data['nik'];?></td>
		<td><?php echo $data['nama'];?></td>
		<td><?php echo $data['tgl_pinjam'];?></td>
		<td><?php echo $data['tgl_kembali'];?></td>
	<td>
											
<?php 
											
	$denda = 100000;
											
	$tgl_tempo2 = $data['tgl_kembali'];
	$tgl_back = date('Y-m-d');
	$lama = terlambat($tgl_tempo2, $tgl_back);
	$denda2 = $lama*$denda;
											
	if ($lama>0) {
												
		echo"
												
			<font color='red'>$lama Hari<br>(Rp $denda2)</font>
												
			";
												
	} else {
												
			echo $lama." Hari";
												
	}
											
	?>
	</td>
	<td><?php echo $data['status'];?></td>
											
	</tr>
									
	<?php } ?>
	
</table>