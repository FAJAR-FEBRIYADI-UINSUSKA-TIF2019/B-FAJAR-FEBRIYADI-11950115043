<?php
	
$tgl_pinjam = date("d-m-y");
$jarak = mktime(0,0,0, date("n"), date("j")+3, date("Y"));
$kembali = date("d-m-y", $jarak);

?>

<div class="panel panel-default">
<div class="panel-heading"> 
	Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
										
										<div class="form-group">
                                            <label>Transportasi</label>
                                            <select class="form-control" name="transportasi">
												
												<?php
												$sql = $koneksi->query("select * from tb_transportasi order by id");
												
												while ($data=$sql->fetch_assoc()) {
													
													echo "<option value='$data[id].$data[nama_transport]'>$data[nama_transport]</option>";
													
												}
													
												?>
												
                                            </select>
                                        </div>
										
										<div class="form-group">
                                            <label>Nama</label>
                                            <select class="form-control" name="nama">
												
												<?php
												$sql = $koneksi->query("select * from tb_peminjam order by nik");
												
												while ($data=$sql->fetch_assoc()) {
													
													echo "<option value='$data[nik].$data[nama]'>$data[nik].$data[nama]</option>";
													
												}
													
												?>

                                            </select>
                                        </div>
										
										<div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" type ="text" name="tgl_pinjam" id="tgl1" value="<?php echo $tgl_pinjam;?>" readonly/>
                                        </div>
										
										<div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" type ="text" name="tgl_kembali" id="tgl2" value="<?php echo $kembali;?>" readonly/>
                                        </div>

										<div>
											<input type="submit" name="simpan" value="Simpan" style="margin-top: 3px" class="btn btn-primary">
										</div>
										
									</div>
									</form>
								</div>
</div>
</div>

<?php

	if (isset($_POST['simpan'])) {
		
		$tgl_pinjam = $_POST['tgl_pinjam'];
		$tgl_kembali = $_POST['tgl_kembali'];
		
		$transportasi = $_POST['transportasi'];
		$transportasi_pecah = explode(".", $transportasi);
		$id = $transportasi_pecah[0];
		$nama_transport = $transportasi_pecah[1];
		
		$nama = $_POST['nama'];
		$nama_pecah = explode(".", $nama);
		$nik = $nama_pecah[0];
		$nama = $nama_pecah[1];
		
		$sql = $koneksi->query("select * from tb_transportasi where nama_transport = '$nama_transport'");
		while ($data = $sql->fetch_assoc()) {
			
			$tinggal = $data['jumlah_transportasi'];
			
			if($tinggal == 0){
				
				?>
					<script type="text/javascript">
						
						alert("Alat Transportasi Habis, Transaksi Tidak Dapat Dilakukan, Mohon Segera Tambah Armada");
						
						window.location.href="?page=transaksi&aksi=tambah";
					</script>
						
				<?php
			
			} else {
				
				$sql = $koneksi->query("insert into tb_transaksi(nama_transport, nik, nama, tgl_pinjam, tgl_kembali, status)values('$nama_transport', '$nik', '$nama', '$tgl_pinjam', '$tgl_kembali', 'pinjam')");	
				
				$sql2 = $koneksi->query("update tb_transportasi set jumlah_transportasi=(jumlah_transportasi-1) where id='$id'");
				
				?>
					<script type="text/javascript">
						
						alert("Penyimpanan Transaksi Data Berhasil");
						
						window.location.href="?page=transaksi";
					</script>
						
				<?php
				
			}
				
			
		}
		
	}

?>
