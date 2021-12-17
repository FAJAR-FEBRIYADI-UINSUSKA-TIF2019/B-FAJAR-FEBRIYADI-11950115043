<?php

	$id = $_GET['id'];
	$sql = $koneksi->query("select * from tb_transportasi where id='$id'");
	$tampil = $sql->fetch_assoc();
	$tahun_transportasi2 = $tampil['tahun_transportasi'];
	$lokasi = $tampil['lokasi'];

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
                                            <label>Nama</label>
                                            <input class="form-control" name="nama_transport" value="<?php echo $tampil['nama_transport'];?>"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Nomor Mesin</label>
                                            <input class="form-control" name="nomor_mesin" value="<?php echo $tampil['nomor_mesin'];?>"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Merek</label>
                                            <input class="form-control" name="merek" value="<?php echo $tampil['merek'];?>"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Tahun Transportasi</label>
                                            <select class="form-control" name="tahun_transportasi">
												<?php
												
													$tahun = date("Y");
												
													for ($i=$tahun-221; $i <= $tahun; $i++) {
														
														
														if ($i==$tahun_transportasi2) {
														
															echo'<option value="'.$i.'" selected>'.$i.'</option>';
														
														} else {
														
														
															echo'<option value="'.$i.'">'.$i.'</option>';
														
														}
														
														
													}
												
												?>
												
                                            </select>
                                        </div>
										
										<div class="form-group">
                                            <label>Plat</label>
                                            <input class="form-control" name="plat" value="<?php echo $tampil['plat'];?>"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Jumlah Transportasi</label>
                                            <input class="form-control" type ="number" name="jumlah_transportasi" value="<?php echo $tampil['jumlah_transportasi'];?>"/>
                                        </div>
										
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="armada1" <?php if ($lokasi=='armada1'){echo "selected";} ?>>Armada 1</option>
                                                <option value="armada2" <?php if ($lokasi=='armada2'){echo "selected";} ?>>Armada 2</option>
												<option value="armada3" <?php if ($lokasi=='armada3'){echo "selected";} ?>>Armada 3</option>
                                            </select>
                                        </div>
										
										<div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tgl_input" type ="date" value="<?php echo $tampil['tgl_input'];?>"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="harga_hari" type ="number" value="<?php echo $tampil['harga_hari'];?>"/>
                                        </div>
										
										<div>
											<input type="submit" name="simpan" value="Update" class="btn btn-primary">
										</div>
										
									</div>
									</form>
								</div>
</div>
</div>

<?php

$nama_transport = $_POST['nama_transport'];
$nomor_mesin = $_POST['nomor_mesin'];
$merek = $_POST['merek'];
$tahun_transportasi = $_POST['tahun_transportasi'];
$plat = $_POST['plat'];
$jumlah_transportasi = $_POST['jumlah_transportasi'];
$lokasi = $_POST['lokasi'];
$tgl_input = $_POST['tgl_input'];
$harga_hari = $_POST['harga_hari'];
$simpan = $_POST['simpan'];


if ($simpan) {
	
	$sql = $koneksi->query("update tb_transportasi set nama_transport='$nama_transport', nomor_mesin='$nomor_mesin', merek='$merek', tahun_transportasi='$tahun_transportasi', plat='$plat', jumlah_transportasi='$jumlah_transportasi', lokasi='$lokasi', tgl_input='$tgl_input', harga_hari='$harga_hari' where id='$id'");
	
	if($sql) {
		
		?>
			<script type="text/javascript">

				alert("Data Berhasil Diupdate");
				window.location.href="?page=transportasi";
			
			</script>
			<?php
		
	}
	
}

?>
