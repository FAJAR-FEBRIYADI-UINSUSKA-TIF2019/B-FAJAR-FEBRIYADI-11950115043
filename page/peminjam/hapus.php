<?php

	 $nik = $_GET['nik'];
	 $koneksi->query("delete from tb_peminjam where nik = '$nik'");
	 
?>
	
<script type="text/javascript">
	window.location.href="?page=peminjam";

</script>