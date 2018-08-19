<?php 
include 'koneksi.php';
session_start();

	$aksi = $_POST['aksi'];
	if ($aksi == "simpan"){
		echo $id_pendapatan = $_POST['id_pendapatan'];
		echo $pendapatan = $_POST['pendapatan'];
		echo $modal = $_POST['modal'];
		echo $bulan =$_POST['bulan'];



		$lain= $modal * $bulan; 
		$tot_untung= $pendapatan - $lain;
		
		//echo $pajak = $_POST['pajak'];
		// $tot_untung = $pendapatan - $modal;

		if ($tot_untung>=10000) {
			$pajak = 0.1*$tot_untung;
			var_dump($pajak);
			
			// die();
			# code...
		} elseif ($tot_untung<=10000){
			$pajak = 0.05*$tot_untung;
			var_dump($pajak);
			
			// die();
		}else {$pajak = 0*$tot_untung;
			
		}


	
		echo $query = "INSERT INTO pendapatan(id_pendapatan, pendapatan, modal, bulan, tot_untung, pajak) VALUES ('$id_pendapatan','$pendapatan','$modal','$bulan','$tot_untung','$pajak')";
		echo $hsl=mysqli_query($connect,$query);
		if ($tot_untung){
			header("location:datapendapatan.php");
		}
		
	}
?>