<?php

	 $id = $_GET['id'];
	 $koneksi->query("delete from tb_transportasi where id = '$id'");
	 
?>
	
<script type="text/javascript">
	window.location.href="?page=transportasi";

</script>