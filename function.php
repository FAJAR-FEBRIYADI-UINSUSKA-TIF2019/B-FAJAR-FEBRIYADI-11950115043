<?php

	function terlambat ($tgl_tempo, $tgl_back) {
	
	$tgl_tempo_pecah = explode("-", $tgl_tempo);
	$tgl_tempo_pecah = $tgl_tempo_pecah[2]."-".$tgl_tempo_pecah[1]."-".$tgl_tempo_pecah[0];
		
	$tgl_back_pecah = explode("-", $tgl_back);
	$tgl_back_pecah = $tgl_back_pecah[2]."-".$tgl_back_pecah[1]."-".$tgl_back_pecah[0];

	
	$perbandingan = strtotime($tgl_back_pecah)-strtotime($tgl_tempo_pecah);

	$perbandingan = $perbandingan/86400;

	if ($perbandingan>=1) {
		
		$tanggal_hasil = floor($perbandingan);
		
	} else {
		
		$tanggal_hasil = 0;
		
	}
		return $tanggal_hasil;
}
?>