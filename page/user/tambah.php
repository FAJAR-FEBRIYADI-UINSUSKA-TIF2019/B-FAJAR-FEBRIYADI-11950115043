<div class="panel panel-default">
<div class="panel-heading"> 
	Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" />
                                        </div>
										
										<div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" />
                                        </div>
										
										<div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                        </div>
										
                                        <div class="form-group">
                                            <label>Level</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="Admin" name="level"/> Admin
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="User" name="level"/> User
                                            </label>
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

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$level = $_POST['level'];

$simpan = $_POST['simpan'];


if ($simpan) {
	
	$sql = $koneksi->query("insert into tb_user(username, password, nama, level)
	values('$username','$password', '$nama', '$level')");
	
	if($sql) {
		
		?>
			<script type="text/javascript">

				alert("Data Berhasil Disimpan");
				window.location.href="?page=user";
			
			</script>
			<?php
		
	}
	
}

?>
