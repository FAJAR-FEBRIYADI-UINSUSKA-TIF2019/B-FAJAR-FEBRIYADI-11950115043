<?php

	$koneksi = new mysqli("localhost","root","","db_rentalfajar");
	
	$filename = "user_excel-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename=$filename");
	header("content-type: application/vdn.ms-excel");


?>

<h2>Laporan User</h2>
<table border="1">
	
	<tr>
        <th>Nomor User</th>
        <th>Username</th>
        <th>Password</th>
		<th>Nama</th>
		<th>Level</th>
    </tr>
	
	<?php
										
	$no = 1;
										
	$sql = $koneksi->query("select * from tb_user");
										
	while ($data= $sql->fetch_assoc()){
											
	$level = ($data['level']=='admin')?"Admin":"User";
										
	?>
										
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password'];?></td>
			<td><?php echo $data['nama'];?></td>
			<td><?php echo $level;?></td>
									
		</tr>
									
	<?php } ?>
	
</table>