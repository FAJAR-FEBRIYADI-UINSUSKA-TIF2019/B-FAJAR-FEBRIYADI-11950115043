<?php

$id =$_GET['id'];
$nama_transport =$_GET['nama_transport'];

$sql = $koneksi->query("update tb_transaksi set status='kembali' where id='$id'");

$sql = $koneksi->query("update tb_transportasi set jumlah_transportasi = (jumlah_transportasi+1) where nama_transport='$nama_transport'");

	?>
			
			<script type="text/javascript">

				alert("Proses Kembali Sukses");
				window.location.href="?page=transaksi";
			
			</script>
		
	<?php

?>