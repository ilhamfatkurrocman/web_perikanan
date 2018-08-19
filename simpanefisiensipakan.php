<?php 
include 'koneksi.php';
session_start();

	$aksi = $_POST['aksi'];
	if ($aksi == "simpan"){
		echo $id_trans = $_POST['id_trans'];
		echo $id_ikan = $_POST['id_ikan'];
		echo $id_jenis = $_POST['id_jenis'];
		echo $id_pakan = $_POST['id_pakan'];
		echo $bulan = $_POST['bulan'];
		echo $Wt = $_POST['Wt'];
		echo $W0 = $_POST['W0'];
		echo $D = $_POST['D'];
		echo $F = $_POST['F'];
		


		$a = $Wt + $D;
		$per = 100;
		$s = $a-$W0/$F*$per;
		$E = $s / $bulan;


	
		 
		echo $query = "INSERT INTO efisiensi_pakan(id_trans, id_ikan, id_jenis, id_pakan, bulan, Wt, W0, D, F, E) VALUES ('$id_trans','$id_ikan','$id_jenis','$id_pakan','$bulan', '$Wt','$W0', '$D', '$F', '$E')";
		echo $hsl=mysqli_query($connect,$query);
		if ($hsl){
			header("location:dataefisiensipakan.php");
		}
		
	}
?>