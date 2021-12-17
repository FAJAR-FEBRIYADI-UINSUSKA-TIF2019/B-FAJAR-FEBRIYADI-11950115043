<a href ="?page=user&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px">Tambah Data</a>   
<a href ="./laporan/laporan_user_excel.php" target="blank" class="btn btn-default" style="margin-bottom: 5px"><i class = "fa fa-print"></i> Export To Excel</a>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nomor User</th>
                                            <th>Username</th>
                                            <th>Password</th>
											<th>Nama</th>
											<th>Level</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										
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
										<td>
											
											<a href="?page=user&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fa fa-edit"></i>Ubah</a>
											<a onClick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" href="?page=user&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>	
											
										</td>
											
										</tr>
									
										<?php } ?>
										
									</tbody>
									
							</div>
						</div>
					</div>
			    </div>
	        </div>
						
									
									
									
									
									
									
									
									
									
									