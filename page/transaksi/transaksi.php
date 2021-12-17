<a href ="?page=transaksi&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px">Tambah Data</a>
<a href ="./laporan/laporan_transaksi_excel.php" target="blank" class="btn btn-default" style="margin-bottom: 5px"><i class = "fa fa-print"></i> Export To Excel</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>No</th>
                                            <th>Nama Transport</th>
                                            <th>NIK</th>
                                            <th>Nama Peminjam</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
											<th>Terlambat</th>
											<th>Status</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										
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
										<td>
											<a href="?page=transaksi&aksi=kembali&id=<?php echo $data['id']; ?>&nama_transport=<?php echo $data['nama_transport']; ?>" class="btn btn-info">Back</a>
											
											<a href="?page=transaksi&aksi=perpanjang&id=<?php echo $data['id']; ?>&nama_transport=<?php echo $data['nama_transport']?>&lama=<?php echo $lama ?>&tgl_kembali=<?php echo $data['tgl_kembali']?>" class="btn btn-danger">Panjang</a>
											
										</td>
											
										</tr>
									
										<?php } ?>
										
									</tbody>
									
							</div>
						</div>
					</div>
			    </div>
	        </div>
						
									
									
									
									
									
									
									
									
									
									