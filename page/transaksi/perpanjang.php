<?php

	$id = $_GET['id'];
	$nama_transport = $_GET['nama_transport'];
	$tgl_kembali = $_GET['tgl_kembali'];
	$lama = $_GET['lama'];

	if ($lama > 2) {
		
		?>
			
			<script type="text/javascript">
			alert("Tidak Dapat Melakukan Perpanjangan Rental Belum Dikembalikan. Harap Kembalikan Dahulu Baru Perpanjang");
				window.location.href="?page=transaksi";
			</script>
		
		<?php
		
	} else {
		
		$tgl_kembali_pecah = explode("-", $tgl_kembali);
		$next_3_hari = mktime(0,0,0, $tgl_kembali_pecah[1], $tgl_kembali_pecah[0]+3, $tgl_kembali_pecah[2]);
		$next_hari = date("d-m-y", $next_3_hari);
		
		$sql = $koneksi->query("update tb_transaksi set tgl_kembali='$next_hari' where id='$id'");
		
		if ($sql) {
			
			?>
				
				<script type="text/javascript">
				
					alert("Sukses Melakukan Perpanjangan");
					window.location.href="?page=transaksi";
					
				</script>

			<?php
			
		} else {
			
			?>
			
				<script type="text/javascript">
				
					alert("Gagal Melakukan Perpanjangan");
					window.location.href="?page=transaksi";
					
				</script>

			<?php
			
		}
		
	}

?>