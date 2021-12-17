<a href ="?page=transportasi&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px">Tambah Data</a>   
<a href ="./laporan/laporan_transportasi_excel.php" target="blank" class="btn btn-default" style="margin-bottom: 5px"><i class = "fa fa-print"></i> Export To Excel</a>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Transportasi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nomor Transport</th>
                                            <th>Nama</th>
                                            <th>Nomor Mesin</th>
                                            <th>Merek</th>
                                            <th>Plat</th>
											<th>Jumlah Transport</th>
											<th>Harga/Hari</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										
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
										<td>
											<a href="?page=transportasi&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fa fa-edit"></i>Ubah</a>
											<a onClick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" href="?page=transportasi&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>	
											
										</td>
											
										</tr>
									
										<?php } ?>
										
									</tbody>
									
							</div>
						</div>
					</div>
			    </div>
	        </div>
						
									
									
									
									
									
									
									
									
									
									