<?php 
include 'koneksi.php';
session_start();

	$aksi = $_POST['aksi'];
	if ($aksi == "simpan"){
		echo $id_jenisgur = $_POST['id_jenisgur'];
		echo $nama_gur = $_POST['nama_gur'];

	
		 
		echo $query = "INSERT INTO jenis_gurame(id_jenisgur, nama_gur) VALUES ('$id_jenisgur','$nama_gur')";
		echo $hsl=mysqli_query($connect,$query);
		if ($hsl){
			header("location:datagurame.php");
		}
		
	}
?>