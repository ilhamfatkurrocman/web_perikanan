<?php

include 'koneksi.php';

session_start();

	$aksi = $_POST['aksi'];
	if ($aksi == "simpan"){
		$id_pendapatan = $_POST['id_pendapatan'];
		$pendapatan = $_POST['pendapatan'];

		$modal = $_POST['modal'];
		$bulan = $_POST['bulan'];




		 $tot_untung = $pendapatan - $modal;

		if ($tot_untung>=10000) {
			$pajak = 0.1*$tot_untung;
			var_dump($pajak);
			header("datapendapatan.php");
			// die();
			# code...
		} elseif ($tot_untung<=10000){
			$pajak = 0.05*$tot_untung;
			var_dump($pajak);
			header("datapendapatan.php");
			// die();
		}else {$pajak = 0*$tot_untung;
			header("datapendapatan.php");
		}
		

	
		mysqli_query($connect,"update pendapatan set pendapatan='$pendapatan', modal='$modal' where id_pendapatan='$id_pendapatan'");

// mengalihkan halaman kembali ke index.php
		header("location:datapendapatan.php");

		
	}



?>