<div class="panel panel-default">
<div class="panel-heading"> 
	Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control" name="nik" />
                                        </div>
										
										<div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                        </div>
										
										<div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" />
                                        </div>
										
										<div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type ="date" name="tgl_lahir"/>
                                        </div>
										
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="L" name="jk"/> Laki-Laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="P" name="jk"/> Perempuan
                                            </label>
                                        </div>
										
										<div class="form-group">
                                            <label>Tempat Tinggal</label>
                                            <input class="form-control" name="tempat_tinggal" />
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
	
	$sql = $koneksi->query("insert into tb_peminjam(nik, nama, tempat_lahir, tgl_lahir, jk, tempat_tinggal)
	values('$nik','$nama', '$tempat_lahir', '$tgl_lahir', '$jk', '$tempat_tinggal')");
	
	if($sql) {
		
		?>
			<script type="text/javascript">

				alert("Data Berhasil Disimpan");
				window.location.href="?page=peminjam";
			
			</script>
			<?php
		
	}
	
}

?>
