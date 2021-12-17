<div class="panel panel-default">
<div class="panel-heading"> 
	Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama_transport" />
                                        </div>
										
										<div class="form-group">
                                            <label>Nomor Mesin</label>
                                            <input class="form-control" name="nomor_mesin" />
                                        </div>
										
										<div class="form-group">
                                            <label>Merek</label>
                                            <input class="form-control" name="merek" />
                                        </div>
										
										<div class="form-group">
                                            <label>Tahun Transportasi</label>
                                            <select class="form-control" name="tahun_transportasi">
												<?php
												
													$tahun = date("Y");
												
													for ($i=$tahun-221; $i <= $tahun; $i++) {
														echo'
														
															<option value="'.$i.'">'.$i.'</option>
														
														';
														
													}
												
												?>
												
                                            </select>
                                        </div>
										
										<div class="form-group">
                                            <label>Plat</label>
                                            <input class="form-control" name="plat" />
                                        </div>
										
										<div class="form-group">
                                            <label>Jumlah Transportasi</label>
                                            <input class="form-control" type ="number" name="jumlah_transportasi" />
                                        </div>
										
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="armada1">Armada 1</option>
                                                <option value="armada2">Armada 2</option>
												<option value="armada3">Armada 3</option>
                                            </select>
                                        </div>
										
										<div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tgl_input" type ="date"/>
                                        </div>
										
										<div class="form-group">
                                            <label>Harga Per Hari</label>
                                            <input class="form-control" name="harga_hari" type ="number"/>
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
	
	$sql = $koneksi->query("insert into tb_transportasi(nama_transport, nomor_mesin, merek, tahun_transportasi, plat, jumlah_transportasi, lokasi, tgl_input, harga_hari)
	values('$nama_transport','$nomor_mesin', '$merek', '$tahun_transportasi', '$plat', '$jumlah_transportasi', '$lokasi', '$tgl_input','$harga_hari')");
	
	if($sql) {
		
		?>
			<script type="text/javascript">

				alert("Data Berhasil Disimpan");
				window.location.href="?page=transportasi";
			
			</script>
			<?php
		
	}
	
}

?>
