<?php

	$nik = $_GET['nik'];
	$sql = $koneksi->query("select * from tb_peminjam where nik='$nik'");
	$tampil = $sql->fetch_assoc();
	$gender = $tampil['jk'];


?>

<div class="panel panel-default">
<div class="panel-heading"> 
	Ubah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control" name="nik" value="<?php echo $tampil['nik'];?>" readonly/>
                                        </div>
										
										<div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama'];?>"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" value="<?php echo $tampil['tempat_lahir'];?>"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type ="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir'];?>"/>
                                        </div>
										
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="L" name="jk" <?php if ($gender=='L'){echo "checked";}?>/> Laki-Laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="P" name="jk" <?php if ($gender=='P'){echo "checked";}?>/> Perempuan
                                            </label>
                                        </div>
										
										<div class="form-group">
                                            <label>Tempat Tinggal</label>
                                            <input class="form-control" name="tempat_tinggal" value="<?php echo $tampil['tempat_tinggal'];?>"/>
                                        </div>

										<div>
											<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
										</div>
										
									</div>
									</form>
								</div>
</div>
</div>

<?php

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$tempat_tinggal = $_POST['tempat_tinggal'];

$simpan = $_POST['simpan'];


if ($simpan) {
	
	$sql = $koneksi->query("update tb_peminjam set nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk', tempat_tinggal='$tempat_tinggal' where nik='$nik'");
	
	if($sql) {
		
		?>
			<script type="text/javascript">

				alert("Data Berhasil Diupdate");
				window.location.href="?page=peminjam";
			
			</script>
			<?php
		
	}
	
}

?>
