<a href ="?page=peminjam&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px"><i class = "fa fa-plus"></i> Tambah Data</a>
<a href ="./laporan/laporan_peminjam_excel.php" target="blank" class="btn btn-default" style="margin-bottom: 5px"><i class = "fa fa-print"></i> Export To Excel</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Peminjam
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
											<th>Tempat Tinggal</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										
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
										<td>
											<a href="?page=peminjam&aksi=ubah&nik=<?php echo $data['nik']; ?>" class="btn btn-info"><i class="fa fa-edit"></i>Ubah</a>
											<a onClick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" href="?page=peminjam&aksi=hapus&nik=<?php echo $data['nik']; ?>" class="btn btn-danger">Hapus</a>	
											
										</td>
											
										</tr>
									
										<?php } ?>
										
									</tbody>
									
							</div>
						</div>
					</div>
			    </div>
	        </div>
						
									
									
									
									
									
									
									
									
									
									